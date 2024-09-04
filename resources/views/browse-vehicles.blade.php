<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Browse Other Vehicles
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-6 text-gray-900 dark:text-gray-100">
                @if ($vehicles->count() > 0)
                    @foreach ($vehicles as $vehicle)
                        <x-vehicle-listing :vehicle="$vehicle" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
