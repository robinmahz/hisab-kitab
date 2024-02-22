<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-4 justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </div>
    </x-slot>
    <div class="px-[7rem] my-12 dark:text-white">
        <div class="grid grid-flow-col">
            <div class="text-green-600 px-4 py-2 grid place-items-center rounded-md ml-20 bg-[#1F2937] ">
                <h2 class="mb-4">Total Income</h2>
                <span>Rs.{{$income}}</span>
            </div>
            <div class="text-red-500 px-4 py-2 grid place-items-center rounded-md ml-20 bg-[#1F2937] ">
                <h2 class="mb-4">Total Expense</h2>
                <span>Rs.{{$expense}}</span>
            </div>
            <div class="text-green-600 px-4 py-2 grid place-items-center rounded-md ml-20 bg-[#1F2937] ">
                <h2 class="mb-4">Total lend</h2>
                <span>Rs.{{$lend}}</span>
            </div>
            <div class="text-red-500 px-4 py-2 grid place-items-center rounded-md ml-20 bg-[#1F2937] ">
                <h2 class="mb-4">Total Borrow</h2>
                <span>Rs.{{$borrow}}</span>
            </div>
        </div>
    </div>
</x-app-layout>