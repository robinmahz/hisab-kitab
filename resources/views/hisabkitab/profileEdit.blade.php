<x-app-layout>
    <form enctype="multipart/form-data" method="post" action="/profile/edit" class="text-white">
        @csrf
        @method('patch')
        <input type="file" name="profile" accept="images/png, images/jpeg, images/jpg">
        <button type="submit">Submit</button>
        <label for="bio">Enter your bio </label>
        <textarea name="bio"></textarea>
</x-app-layout>