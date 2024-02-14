<x-app-layout>
    <form action="/hisabkitab" method="POST">
        @csrf
        <label class="text-white" for="type">Select transction type</label>
        <select name="type" id="">
            <option value="income">Income</option>
            <option value="expense">Expense</option>
            <option value="lend">Lend</option>
            <option value="borrow">Borrow</option>
        </select>
        <label class="text-white" for="amount">Enter Amount:</label>
        <input type="number" name="amount" id="">
        <label class="text-white" for="particular">Particulars:</label>
        <textarea name="particular" id="" cols="30" rows="10"></textarea>
        <button class="text-white border-2 p-2" type="submit">Submit</button>
        <button class="text-white border-2 p-2" type="reset">Reset</button>
    </form>
</x-app-layout>
