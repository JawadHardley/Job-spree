<x-layout>

    <div class="container">
        <div class="row">
            <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-check-square-fill text-primary"></i>
                Featured Jobs
              </a>
        </div>
        <div class="row">
                <x-jobCards></x-jobCards>
                <x-jobCards></x-jobCards>
                <x-jobCards></x-jobCards>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-check-square-fill text-primary"></i>
                Tags
              </a>
        </div>
        <div class="row">
            <div class="col my-4">
                <x-tag>API</x-tag>
                <x-tag>API</x-tag>
                <x-tag>API</x-tag>
                <x-tag>API</x-tag>
                <x-tag>API</x-tag>
                <x-tag>API</x-tag>
                <x-tag>API</x-tag>
                <x-tag>API</x-tag>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-check-square-fill text-primary"></i>
                Recent Jobs
              </a>
        </div>
        <div class="row">
            <div class="col my-4">
                {{-- jabo --}}
            </div>
        </div>
    </div>

</x-layout>
