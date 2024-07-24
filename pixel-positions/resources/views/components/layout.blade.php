<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap w/ Vite</title>
    <script type="module" src="./js/main.js"></script>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
  </head>
  <body class="bg-black">
    <nav class="navbar navbar-expand-lg bg-black border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Jobs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Careers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Salaries</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Companies</a>
                  </li>
                </ul>
              </div>
              <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-check-square-fill text-primary"></i>
                Post a job
              </a>
            </div>
      </nav>

      <div class="container">
        <div class="row">
            <div class="col mx-auto text-center py-5 px-5">
                <h2 class="fs-3 text-white py-4">Let's Find You A Great Job</h2>
                <div class="input-group mb-3 w-50 mx-auto">
                    <input type="text" class="form-control bg-dark text-white" placeholder="Im looking for ..." aria-describedby="basic-addon1">
                    <span class="input-group-text bg-dark" id="basic-addon1">
                        <i class="bi bi-search"></i>
                    </span>
                </div>
            </div>
        </div>
      </div>

      <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card bg-dark text-white" style="">
                        <div class="card-body">
                          <span class="card-title">GovGen</span>
                          <h6 class="card-subtitle mb-2 text-center fs-3 py-3">Full Stack Developer</h6>
                          <p class="card-text fs-6 text-center">Full time from - $60,000</p>

                          <div class="row align-items-end">
                            <div class="col-10">
                                <span class="badge rounded-pill text-bg-secondary">Frontend</span>
                                <span class="badge rounded-pill text-bg-secondary">API</span>
                                <span class="badge rounded-pill text-bg-secondary">Backend</span>
                              </div>
                              <div class="col-2 me-auto px-2">
                                <img src="http://placehold.it/42/42" class="rounded" alt="">
                              </div>
                          </div>

                        </div>
                    </div>
                </a>
            </div>

        </div>
      </div>

  </body>
</html>
