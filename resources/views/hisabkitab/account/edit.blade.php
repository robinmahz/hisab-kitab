<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl w-fit mx-auto sm:px-6 lg:px-8 space-y-6 py-12">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg flex items-center flex-col gap-6 text-white">
            <form method="post" action="/account/{{Auth::id()}}" enctype="multipart/form-data" class="text-white">
                @csrf
                @method('patch')

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                <input accept="image/png, image/jpeg, image/jpg" type="file" name="profile" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                <div class="my-4">
                    <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your bio</label>
                    <textarea rows="4" name="bio" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your Bio here..."></textarea>
                </div>
                <button type="submit" class=" px-4 py-2 rounded-md bg-[#161d27] mt-4">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>