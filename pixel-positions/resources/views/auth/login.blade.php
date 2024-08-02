<x-layout>

    <h1 class="text-white text-center">Login</h1>

    <div class="container text-white">
        <x-forms.form method="POST" action="/login" class="mx-auto w-50" enctype="multipart/form-data">
            <x-forms.input class=""  label="email" name="email" type="email" />
            <x-forms.input class=""  label="password" name="password" type="password" />

        <x-forms.button >Login</x-forms.form>
        </x-forms.form>
    </div>


</x-layout>
