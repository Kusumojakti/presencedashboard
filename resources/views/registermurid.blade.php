<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Presensi Dashboard</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
      rel="stylesheet"
    />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="./css/style.min.css" />
  </head>

  <body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
      <!-- ! Sidebar -->
      <aside class="sidebar">
        <div class="sidebar-start">
          <div class="sidebar-head">
            <img src="img/icon.png" alt="logo">
              <div class="logo-text">
                  <span class="logo-title">Presensi Dashboard</span>
              </div>     
              <a href="img/icon.png" class="logo-wrapper" title="Home">
              </a>
          </div>
          <div class="sidebar-body">
              <ul class="sidebar-body-menu">
                  <li>
                      <a href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                  </li>
                  <span class="system-menu__title">Data Presensi</span>
                  <li>
                      <a href="/daftar"><span class="icon edit" aria-hidden="true"></span>Murid</a>
                  </li>
                  <li>
                      <a href="/status"><span class="icon edit" aria-hidden="true"></span>Status Absensi</a>
                  </li>
                  <li>
                      <a href="/uid"><span class="icon edit" aria-hidden="true"></span>Data UID</a>
                  </li>
                  <span class="system-menu__title">system</span>
                  <li>
                      <a class="active" href="/registermurid"><span class="icon edit" aria-hidden="true"></span>Register Murid</a>
                  </li>
                  <li>
                      <a href="/registeruid"><span class="icon edit" aria-hidden="true"></span>Register UID</a>
                  </li>
              </ul>
          </div>
        </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="./img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Nafisa Sh.</span>
                <span class="sidebar-user__subtitle">Support manager</span>
            </div>
        </a>
    </div>
</aside>
      <div class="main-wrapper">
        <!-- ! Main nav -->
        <nav class="main-nav--bg">
          <div class="container main-nav">
            <div class="main-nav-start">
              <div class="search-wrapper">
                <i data-feather="search" aria-hidden="true"></i>
                <input type="text" placeholder="Enter keywords ..." required />
              </div>
            </div>
            <div class="main-nav-end">
              <button
                class="sidebar-toggle transparent-btn"
                title="Menu"
                type="button"
              >
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle--gray" aria-hidden="true"></span>
              </button>
              <div class="lang-switcher-wrapper">
                <button class="lang-switcher transparent-btn" type="button">
                  EN
                  <i data-feather="chevron-down" aria-hidden="true"></i>
                </button>
                <ul class="lang-menu dropdown">
                  <li><a href="##">English</a></li>
                  <li><a href="##">French</a></li>
                  <li><a href="##">Uzbek</a></li>
                </ul>
              </div>
              <button
                class="theme-switcher gray-circle-btn"
                type="button"
                title="Switch theme"
              >
                <span class="sr-only">Switch theme</span>
                <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
              </button>
              <div class="notification-wrapper">
                <button
                  class="gray-circle-btn dropdown-btn"
                  title="To messages"
                  type="button"
                >
                  <span class="sr-only">To messages</span>
                  <span
                    class="icon notification active"
                    aria-hidden="true"
                  ></span>
                </button>
                <ul class="users-item-dropdown notification-dropdown dropdown">
                  <li>
                    <a href="##">
                      <div class="notification-dropdown-icon info">
                        <i data-feather="check"></i>
                      </div>
                      <div class="notification-dropdown-text">
                        <span class="notification-dropdown__title"
                          >System just updated</span
                        >
                        <span class="notification-dropdown__subtitle"
                          >The system has been successfully upgraded. Read more
                          here.</span
                        >
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="notification-dropdown-icon danger">
                        <i data-feather="info" aria-hidden="true"></i>
                      </div>
                      <div class="notification-dropdown-text">
                        <span class="notification-dropdown__title"
                          >The cache is full!</span
                        >
                        <span class="notification-dropdown__subtitle"
                          >Unnecessary caches take up a lot of memory space and
                          interfere ...</span
                        >
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="notification-dropdown-icon info">
                        <i data-feather="check" aria-hidden="true"></i>
                      </div>
                      <div class="notification-dropdown-text">
                        <span class="notification-dropdown__title"
                          >New Subscriber here!</span
                        >
                        <span class="notification-dropdown__subtitle"
                          >A new subscriber has subscribed.</span
                        >
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="link-to-page" href="##"
                      >Go to Notifications page</a
                    >
                  </li>
                </ul>
              </div>
              <div class="nav-user-wrapper">
                <button
                  href="##"
                  class="nav-user-btn dropdown-btn"
                  title="My profile"
                  type="button"
                >
                  <span class="sr-only">My profile</span>
                  <span class="nav-user-img">
                    <picture
                      ><source
                        srcset="./img/avatar/avatar-illustrated-02.webp"
                        type="image/webp" />
                      <img
                        src="./img/avatar/avatar-illustrated-02.png"
                        alt="User name"
                    /></picture>
                  </span>
                </button>
                <ul class="users-item-dropdown nav-user-dropdown dropdown">
              <li><a href="##">
                  <i data-feather="user" aria-hidden="true"></i>
                  <span>Profile</span>
                </a></li>
              <li><a class="danger" href="/logout">
                  <i data-feather="log-out" aria-hidden="true"></i>
                  <span>Log out</span>
                </a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!-- ! Main -->
        <main class="main users chart-page" id="skip-target">
          <div class="container">
            <h2 class="main-title">Register Murid</h2>
            <section class="vh-50 gradient-custom">
              <div class="container h-100">
                <div
                  class="row justify-content-center align-items-center h-100"
                >
                  <div class="col-12 col-lg-9 col-xl-7">
                    <div
                      class="card shadow"
                      style="border-radius: 15px"
                      id="registmurid"
                    >
                      <div class="card-body p-4 p-md-5">
                        <form action="/registerMurid" method="POST">
                          @csrf

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
                          
                          <div class="row" id="formstyle">
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input
                                  type="text"
                                  name="nisn"
                                  class="form-control form-control-lg"
                                />
                                <label class="form-label" for="nisn"
                                  >Nisn</label
                                >
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input
                                  type="text"
                                  name="nama"
                                  class="form-control form-control-lg"
                                />
                                <label class="form-label" for="Nama"
                                  >Nama</label
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div
                              class="col-md-6 mb-4 d-flex align-items-center"
                            >
                              <div class="form-outline datepicker w-100">
                                <input
                                  type="text"
                                  class="form-control form-control-lg"
                                  name="alamat"
                                />
                                <label for="alamat" class="form-label"
                                  >Alamat</label
                                >
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline w-100">
                                <input
                                  type="text"
                                  class="form-control form-control-lg"
                                  name="tempat_lahir"
                                />
                                <label for="alamat" class="form-label"
                                  >Tempat Lahir</label
                                >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 mb-4">
                              <div class="form-outline datepicker w-100">
                                <input
                                  type="date"
                                  name="tanggal_lahir"
                                  class="form-control form-control-lg"
                                />
                                <label class="form-label" for="tanggal-lahir"
                                  >Tanggal Lahir</label
                                >
                              </div>
                            </div>
                          </div>
                          <div class="d-grid mx-auto">
                            <button
                              class="btn btn-primary"
                              type="submit"
                            >
                              Submit
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </main>
        <!-- ! Footer -->
        <footer class="footer">
          <div class="container footer--flex">
            <div class="footer-start">
              <p>
                2021 © Elegant Dashboard -
                <a
                  href="elegant-dashboard.com"
                  target="_blank"
                  rel="noopener noreferrer"
                  >elegant-dashboard.com</a
                >
              </p>
            </div>
            <ul class="footer-end">
              <li><a href="##">About</a></li>
              <li><a href="##">Support</a></li>
              <li><a href="##">Puchase</a></li>
            </ul>
          </div>
        </footer>
      </div>
    </div>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
    ></script>
    <!-- Chart library -->
    <script src="./plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>
  </body>
</html>
