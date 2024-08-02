<x-layout>
    <x-search/>

    <div class="container">
        <div class="row mt-4">
            <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-check-square-fill text-primary"></i>
                Recent Jobs
              </a>
        </div>
        <div class="row">
            @foreach ($jobs as $job)
                <x-jobCardWide :$job />
            @endforeach
            {{-- <x-jobCardWide></x-jobCardWide>
            <x-jobCardWide></x-jobCardWide> --}}
        </div>
    </div>

</x-layout>
