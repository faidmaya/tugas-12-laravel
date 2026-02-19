<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SEODash - SanberBook</title>

  <link rel="shortcut icon" href="/assets/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="/assets/css/styles.min.css" />

  <style>
    .left-sidebar {
        width: 260px;
    }

    .body-wrapper {
        margin-left: 260px;
        transition: all 0.3s ease;
    }

    @media (max-width: 991px) {
        .body-wrapper {
            margin-left: 0;
        }
    }
  </style>
</head>

<body>

<div class="page-wrapper" id="main-wrapper">

  <!-- Sidebar -->
  <aside class="left-sidebar">
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/" class="text-nowrap logo-img">
          <img src="/assets/images/logos/logo-light.svg" alt="" />
        </a>
      </div>

      <nav class="sidebar-nav scroll-sidebar">
        <ul id="sidebarnav">

          <!-- HOME -->
          <li class="nav-small-cap">
            <span class="hide-menu">HOME</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ url('/') }}">
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>

          <!-- FORM -->
          <li class="nav-small-cap">
            <span class="hide-menu">FORM</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ url('/register') }}">
              <span class="hide-menu">Form Input</span>
            </a>
          </li>

          <!-- MASTER -->
          <li class="nav-small-cap">
            <span class="hide-menu">MASTER</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('categories.index') }}">
              <span class="hide-menu">Category</span>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <!-- Main Content -->
  <div class="body-wrapper">

    <header class="app-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-collapse justify-content-end px-4">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link nav-icon-hover" href="#" data-bs-toggle="dropdown">
                <img src="/assets/images/profile/user-1.jpg"
                     width="35" height="35" class="rounded-circle">
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-12">
          @yield('content')
        </div>
      </div>
    </div>

  </div>
</div>

<!-- JS -->
<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/sidebarmenu.js"></script>
<script src="/assets/js/app.min.js"></script>

</body>
</html>
