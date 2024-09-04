<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public static function createVehicle($data) {
        $vehicle = new self();
        $vehicle->fill($data);
        $vehicle->user_id = auth()->id();
        $vehicle->save();
    }
}
