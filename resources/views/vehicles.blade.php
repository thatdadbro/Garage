<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            My Vehicles
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-6 text-gray-900 dark:text-gray-100">
                @if ($collection->count() > 0)
                    @foreach ($collection as $vehicle)
                        <x-vehicle-listing :vehicle="$vehicle" />
                    @endforeach
                @else
                    <h2 class="bg-white rounded-lg shadow-md p-4 mb-4 text-center text-lg">
                        <b>You don't have any vehicles in your garage... <a href="{{ route('vehicles.add') }}"><u>Click here to add one!</u></a></b>
                    </h2>
                @endif
                <form method="get" action="{{ route('vehicles.add') }}">
                    @csrf
                    <x-primary-button style="display:flex; margin-left:auto;">Add a New Vehicle</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
