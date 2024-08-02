@props(['job'])

<div class="col-12 col-md-6 col-lg-4 my-3">
    <a href="#1" class="text-decoration-none">
        <div class="card bg-dark text-white" style="">
            <div class="card-body">
              <span class="card-title text-secondary">{{ $job->employer->name }}</span>
              <h6 class="card-subtitle mb-2 text-center text-white fs-3 py-3">
                <a href="{{ $job->url }}" class="text-decoration-none text-white">{{ $job->title }}</a>
              </h6>
              <p class="card-text fs-6 text-center text-secondary">{{ $job->schedule }} from - {{ $job->salary }}</p>

              <div class="row align-items-end">
                <div class="col-10">
                    @foreach ($job->tags as $tag)
                        <x-tag :$tag href="/tag/{{ $tag->name }}">{{ $tag->name }}</x-tag>
                    @endforeach
                  </div>
                  <div class="col-2 me-auto px-2">
                    <x-employerLogo width='42'/>
                  </div>
              </div>

            </div>
        </div>
    </a>
</div>
