<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Presensi Dashboard</title>
  <!-- Favicon -->
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="fontawesome-free-6.4.0-web/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('/assets/css/register.css') }}" />
  </head>
  <body>
    <div class="container">
      <div class="row align-items-center justify-content-center vh-100">
        <div class="col-lg-9">
          <div class="shadow rounded">
            <div class="row align-items-center">
              <div class="col-lg-5" id="bg-register">
                <img
                  src="/img/register.jpg"
                  class="rounded d-flex justify-content-center"
                  alt="bg-image"
                  width="450px"
                  id="image"
                />
              </div>
              <div class="col-lg-7">
                <div class="p-5 ps-4 text-dark">
                  <form action="/createUser" method="POST">
                    @csrf
                    
                    <h3>Register Here</h3>
                    <h6 style="font-weight: 400">
                      Please fill all fields below
                    </h6>
                    @if($errors->any())
                    <div class="alert alert-danger fade show" role="alert">
                      <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

              {{-- success --}}
              @if(session('success'))
                <div class="alert alert-success fade show" role="alert">
                  {{ session('success') }}
                </div>
              @endif
                    <div class="mb-3 mt-4">
                      <label for="exampleInputEmail1" class="form-label"
                        >NISN</label
                      >
                      <input
                        type="text"
                        class="form-control mb-3"
                        name="nisn"
                      />
                      <label for="inputName" class="form-label"
                        >Email address</label
                      >
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        aria-describedby="emailHelp"
                      />
                      <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputPassword1" class="form-label"
                        >Password</label
                      >
                      <input
                        type="password"
                        class="form-control"
                        name="password"
                      />
                    </div>
                    <div class="mb-3 form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="exampleCheck1"
                      />
                      <label class="form-check-label mb-3" for="checkregister"
                        >I Do Accept the Term and Conditions of your site</label
                      >
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button class="btn btn-primary shadow" type="submit">
                        <b>Submit</b>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/967e211c6b.js" crossorigin="anonymous"></script>
  </body>
</html>
