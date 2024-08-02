@props(['job'])

<div class="col-12 my-3 p-3 rounded bg-dark">
    <a href="{{ $job->url }}" target="_blank" class="text-decoration-none">
        <div class="row">
            <div class="col-2">
                <x-employerLogo :employer="$job->employer" width='120'/>
            </div>
            <div class="col-8">
                <h6 class="lead fs-6 text-secondary">{{ $job->employer->name }}</h6>
                <h2 class="fs-4 text-white">{{ $job->title }}</h2>
            </div>
            <div class="col-2">
                <span class="btn mx-1 float-end lead btn-sm rounded-pill btn-outline-secondary">{{ $job->location }}</span>
                <span class="btn mx-1 float-end lead btn-sm rounded-pill btn-outline-secondary">22h</span>
            </div>
        </div>
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-10">
                <h6 class="lead fs-6 text-secondary">{{ $job->schedule }} from - {{ $job->salary }}</h6>
            </div>
        </div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag href="/tag/{{ $tag->name }}">{{ $tag->name }}</x-tag>
        @endforeach
    </a>
</div>
