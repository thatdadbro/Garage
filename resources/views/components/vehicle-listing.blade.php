<!-- <div class="md:flex">
  <div class="md:flex-shrink-0">
    <img class="rounded-lg md:w-56" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" width="448" height="299" alt="Woman paying for a purchase">
  </div>
  <div class="mt-4 md:mt-0 md:ml-6">
    <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">{{ $vehicle->make }}</div>
    <a href="#" class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Finding customers for your new business</a>
    <p class="mt-2 text-gray-600">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
  </div>
</div> -->

<div class="bg-white rounded-lg shadow-md p-6 mb-4 flex items-center">
    @php
        $imagePath = $vehicle->image ?? 'images/vehicles/default-vehicle-image.jpg';
    @endphp
    <div style="width:300px;">
        <img src="{{ asset($imagePath) }}" alt="Image of {{ $vehicle->name }}" style="padding-right:2rem; width:100%">
    </div>
    <div class="flex items-top w-full">
      <div style="margin-right:1.5rem; padding-right:1.5rem; border-right:1px solid #ddd; width:40%">
          <h2 class="text-xl font-bold">{{ $vehicle->year }} {{ $vehicle->make }} {{ $vehicle->model }}</h2>
          <p class="text-md mb-2"><em>"{{ $vehicle->name }}"</em></p>
          <p class="text-gray-600 text-sm">Owner: {{ $vehicle->user->name }}</p>
          <p class="text-gray-600 text-sm">Acquired: {{ $vehicle->niceDate() }}</p>
          <p class="text-gray-600 text-sm">Transmission: {{ $vehicle->transmission }}</p>
          <p class="text-gray-600 text-sm">Color: {{ $vehicle->color }}</p>
          <p class="text-gray-600 text-sm">VIN: {{ $vehicle->vin ?? 'N/A' }}</p>
          <p class="text-gray-600 text-sm">License Plate: {{ $vehicle->license_plate ?? 'N/A' }}</p>
          <p class="text-gray-600 text-sm">Mileage: {{ $vehicle->mileage ?? 'N/A' }}</p>
          <!-- <a href="#" class="text-blue-500 hover:underline text-sm">Read More</a> -->
      </div>
      <div style="width:60%">
        <h3 class="mb-2">Description/Notes</h3>
        <p class="text-gray-600 text-sm">{{ $vehicle->description ?? 'N/A' }}</p>
      </div>
    </div>
</div>
