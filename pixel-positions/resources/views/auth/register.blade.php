<x-layout>

    <h1 class="text-white text-center">Register</h1>

    <div class="container text-white">
        <x-forms.form method="POST" action="/register" class="mx-auto text-center">
            <x-forms.input  label="Your Name" name="name" />
            <x-forms.input  label="email" name="email" type="email" />
            <x-forms.input  label="password" name="password" type="password" />
            <x-forms.input  label="password confirmation" name="name" type="password" />
            <x-forms.input  label="Your Name" name="name" />

        <x-forms.button >Create Account</x-forms.form>
        </x-forms.form>
    </div>


</x-layout>
