<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            
            <div style="width: 200px" >
                <a href="{{ route('clients.index') }}"> Manage clients</a>
            </div>
            <div style="width: 200px">
                <a href="{{ route('containers.index') }}">  Manage containers</a>
            </div>
            <div style="width: 200px">
                <a href="{{ route('docks.index') }}">  Manage docks</a>
            </div>
            <div style="width: 200px">
                <a href="{{ route('products.index') }}">  Manage products</a>
            </div>
            <div style="width: 200px">
                <a href="{{ route('ships.index') }}">  Manage ships</a>
            </div>
            <div style="width: 200px">
                <a href="{{ route('staffs.index') }}">  Manage staffs</a>
            </div>
            <div style="width: 200px">
                <a href="{{ route('teams.index') }}">  Manage teams</a>
            </div>
            <div style="width: 200px">
                <a href="{{ route('trucks.index') }}">  Manage trucks</a>
            </div>
            <div style="width: 200px">
                <a href="{{ route('warehouses.index') }}">  Manage warehouses</a>
            </div>
        </div>
    </div>
</x-app-layout>
