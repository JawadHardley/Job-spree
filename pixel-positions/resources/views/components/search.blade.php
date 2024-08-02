<div class="container">
    <div class="row">
        <div class="col mx-auto text-center py-5 px-5">
            <h2 class="fs-3 text-white py-4">Let's Find You A Great Job</h2>
            <div class="input-group mb-3 mx-auto">
                <x-forms.form action="/search" class="w-75">
                    <x-forms.input :label="false" name="q" class="bg-dark text-white w-100" placeholder="Im looking for ..." />
                </x-forms.form>
                {{-- <span class="input-group-text bg-dark text-secondary" id="basic-addon1">
                    <i class="bi bi-search"></i>
                </span> --}}
            </div>
        </div>
    </div>
  </div>
