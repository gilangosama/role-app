<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 text-gray-900">
                    "You're logged in!" <b>{{auth()->user()->name}}</b>
                </div> --}}
                <div class="p-6 text-gray-900">
                    Jumlah OPD yang terdaftar : <b>{{ $userCount}}</b>
                </div>

                {{-- <div class="p-6 text-gray-900">
                    Jumlah OPD yang terdaftar : <b>{{ $postCount}}</b>
                </div> --}}
                
            </div>
        </div>
    </div>
</x-admin-layout>
