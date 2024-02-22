<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 py-12">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg flex items-center flex-col gap-6 text-white ">
            <div class="rounded-full overflow-hidden w-52 mt-8">
                <img src="{{$user->profile}}">
            </div>
            <div class="text-3xl">
                {{$user->name}}
            </div>
            <div class="max-w-64 flex justify-center text-sm text-justify">
                {{$user->bio}}
            </div>
            <a href="/account/{{ Auth::id() }}/edit">
                <div class=" px-4 py-2 rounded-md bg-[#161d27]">
                    Edit Profile
                </div>
            </a>
        </div>
    </div>
</x-app-layout>