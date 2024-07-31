<x-layout>

    <div class="container">
        <div class="row">
            <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-check-square-fill text-primary"></i>
                Featured Jobs
              </a>
        </div>
        <div class="row">
            @foreach ($jobs as $job)
                <x-jobCards :$job />
            @endforeach
                {{-- <x-jobCards></x-jobCards>
                <x-jobCards></x-jobCards> --}}
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
                @foreach ($tags as $tag)
                    <x-tag :$tag href="/tag/{{ $tag->name }}">{{ $tag->name }}</x-tag>
                @endforeach
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
            @foreach ($jobs as $job)
                <x-jobCardWide :$job />
            @endforeach
            {{-- <x-jobCardWide></x-jobCardWide>
            <x-jobCardWide></x-jobCardWide> --}}
        </div>
    </div>

</x-layout>
