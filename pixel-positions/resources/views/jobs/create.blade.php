<x-layout>

    <h1 class="text-white text-center">New Job</h1>

    <div class="container text-white">
        <x-forms.form method="POST" action="/jobs" class="mx-auto w-50" enctype="multipart/form-data">
            <x-forms.input class=""  label="Job title" name="title" placeholder="COE"/>
            <x-forms.input class=""  label="Salary" name="salary" placeholder="50,000 USD" />
            <x-forms.input class=""  label="Location" name="location"  placeholder="Winter Fell" />

            <x-forms.select label="schedule" name="schedule">
                <option>Full Time</option>
                <option>Part Time</option>
            </x-forms.select>

            <x-forms.input class=""  label="url" name="url"  placeholder="https://acme.com/jobs/ceo-wanted" />
            <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

            <x-forms.divider />
            <x-forms.input class=""  label="Tag (comma separated)" name="tags"  placeholder="IT, laracast, editors" />

        <x-forms.button >Post Job</x-forms.form>
        </x-forms.form>
    </div>


</x-layout>
