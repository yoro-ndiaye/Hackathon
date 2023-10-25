<x-app-layout>
    <x-slot name="header">
<<<<<<< HEAD
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
=======
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
>>>>>>> a6cc9a3e3fbd9712ff4cb9b0929bacc61496597e
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
<<<<<<< HEAD
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
=======
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
>>>>>>> a6cc9a3e3fbd9712ff4cb9b0929bacc61496597e
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

<<<<<<< HEAD
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
=======
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
>>>>>>> a6cc9a3e3fbd9712ff4cb9b0929bacc61496597e
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

<<<<<<< HEAD
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
=======
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
>>>>>>> a6cc9a3e3fbd9712ff4cb9b0929bacc61496597e
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
