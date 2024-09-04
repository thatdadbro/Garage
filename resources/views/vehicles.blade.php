<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Your Vehicles
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($collection->count() > 0)
                        @foreach ($collection as $vehicle)
                            <li>{{ $vehicle }}</li>
                        @endforeach
                    @else
                        You don't have any vehicles in your garage, <a href="{{ route('vehicles.add') }}"><u>click here to add one!</u></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
