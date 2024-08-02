<x-layout>

    <h1 class="text-white text-center">Register</h1>

    <div class="container text-white">
        <x-forms.form method="POST" action="/register" class="mx-auto w-50" enctype="multipart/form-data">
            <x-forms.input class=""  label="Your Name" name="name" />
            <x-forms.input class=""  label="email" name="email" type="email" />
            <x-forms.input class=""  label="password" name="password" type="password" />
            <x-forms.input class=""  label="password confirmation" name="password_confirmation" type="password" />

            <x-forms.divider />
            <x-forms.input class=""  label="Employer Name" name="employer" />
            <x-forms.input class=""  label="Employer Logo" name="logo" type="file" />

        <x-forms.button >Create Account</x-forms.form>
        </x-forms.form>
    </div>


</x-layout>
