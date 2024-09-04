<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Vehicle extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'year', 'make', 'model', 'transmission', 'color', 'vin', 'license_plate', 'mileage', 'description', 'purchased_at',
    ];

    protected $dates = [
        'purchased_at',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function getCollection() {
        return self::all()->where('user_id', auth()->id());
    }

    public static function create($data) {
        $vehicle = new self();

        $vehicle->fill($data);
        $vehicle->user_id = auth()->id();
        $vehicle->save();

        return self::find($vehicle->id);
    }

    public function uploadImage($image) {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images/vehicles'), $imageName);
        $this->image = 'images/vehicles/' . $imageName;
        $this->save();
    }

    public function niceDate() {
        return $this->purchased_at ? Carbon::parse($this->purchased_at)->format('F j, Y') : '';
    }

    // Query the database for existing cars
    public function search($terms) {
        return self::where(function ($query) use ($terms) {
            $query->where('name', 'like', '%' . $terms . '%')
                ->orWhere('year', 'like', '%' . $terms . '%')
                ->orWhere('make', 'like', '%' . $terms . '%')
                ->orWhere('model', 'like', '%' . $terms . '%');
        })->get();
    }
}
