<form method="POST" action="{{ $action }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
        <label for="make" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            Vehicle Name *
        </label>
        <input type="text" name="name" id="name" class="rounded-md shadow-sm mt-1 block w-full" required>
    </div>

    <div class="mb-4">
        <label for="purchased_at" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            Date Purchased *
        </label>
        <input type="date" name="purchased_at" id="purchased_at" class="rounded-md shadow-sm mt-1 block w-full" required>
    </div>

    <div class="mb-4">
        <label for="year" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            Year *
        </label>
        <input type="number" name="year" id="year" class="rounded-md shadow-sm mt-1 block w-full" required>
    </div>

    <div class="mb-4">
        <label for="make" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            Make *
        </label>
        <input type="text" name="make" id="make" class="rounded-md shadow-sm mt-1 block w-full" required>
    </div>

    <div class="mb-4">
        <label for="model" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            Model *
        </label>
        <input type="text" name="model" id="model" class="rounded-md shadow-sm mt-1 block w-full" required>
    </div>

    <div class="mb-4">
        <label for="transmission" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            Transmission *
        </label>
        <input type="text" name="transmission" id="transmission" class="rounded-md shadow-sm mt-1 block w-full" required>
    </div>

    <div class="mb-4">
        <label for="color" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            Color *
        </label>
        <input type="text" name="color" id="color" class="rounded-md shadow-sm mt-1 block w-full" required>
    </div>

    <div class="mb-4">
        <label for="vin" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            VIN
        </label>
        <input type="text" name="vin" id="vin" class="rounded-md shadow-sm mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="license_plate" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            License Plate
        </label>
        <input type="text" name="license_plate" id="license_plate" class="rounded-md shadow-sm mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="mileage" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            Mileage
        </label>
        <input type="number" name="mileage" id="mileage" class="rounded-md shadow-sm mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="mileage" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            Description/Notes
        </label>
        <textarea name="description" id="description" class="rounded-md shadow-sm mt-1 block w-full"></textarea>
        <!-- <input type="text" name="description" id="description" class="rounded-md shadow-sm mt-1 block w-full" style="resizable=true"> -->
    </div>

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
            Image
        </label>
        <input type="file" name="image" id="image" class="mt-1 block">
    </div>
    
    <hr class="mb-4">

    <x-primary-button style="display:flex; margin-left:auto;">Add Vehicle</x-primary-button>
</form>