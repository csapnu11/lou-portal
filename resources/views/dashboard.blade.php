<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div> -->
            </div>
            <div class="container mx-auto px-6 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Announcements Tile -->
            <a href="{{ url('/public/announcements') }}"
                class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-8 text-center">
                <h3 class="text-xl font-semibold mb-2">Announcements</h3>
                <p class="text-gray-500">View the latest updates and news.</p>
            </a>

            <!-- Profile Tile -->
            <a href="{{ url('/profile') }}"
                class="bg-white border border-gray-200 rounded-xl shadow hover:shadow-lg transition p-8 text-center">
                <h3 class="text-xl font-semibold mb-2">Profile</h3>
                <p class="text-gray-500">Manage your account and settings.</p>
            </a>
        </div>
    </div>
        </div>
    </div>

    
</x-app-layout>