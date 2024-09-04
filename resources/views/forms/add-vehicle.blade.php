<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add a New Vehicle
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('vehicles.create') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="make" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Vehicle Name *
                            </label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="purchased" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Date Purchased *
                            </label>
                            <input type="date" name="purchased" id="purchased" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="year" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Year *
                            </label>
                            <input type="number" name="year" id="year" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="make" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Make *
                            </label>
                            <input type="text" name="make" id="make" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="model" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Model *
                            </label>
                            <input type="text" name="model" id="model" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="transmission" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Transmission *
                            </label>
                            <input type="text" name="transmission" id="transmission" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="color" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Color *
                            </label>
                            <input type="text" name="color" id="color" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="vin" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                VIN
                            </label>
                            <input type="text" name="vin" id="vin" class="form-input rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="license_plate" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                License Plate
                            </label>
                            <input type="text" name="license_plate" id="license_plate" class="form-input rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <label for="mileage" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Mileage
                            </label>
                            <input type="number" name="mileage" id="mileage" class="form-input rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Vehicle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
