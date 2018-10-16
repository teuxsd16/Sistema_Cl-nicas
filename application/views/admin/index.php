<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Painel</title>
  <link rel="stylesheet" href=<?= base_url('assets/vendor/iconfonts/mdi/css/materialdesignicons.min.css') ?>>
  <link rel="stylesheet" href=<?= base_url('assets/vendor/css/vendor.bundle.base.css') ?>>
  <link rel="stylesheet" href=<?= base_url('assets/vendor/css/vendor.bundle.addons.css') ?>>
  <link rel="stylesheet" href=<?= base_url('assets/css/style-admin.css') ?>>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background-color: #2c3e50">
        <a class="navbar-brand brand-logo" href=<?= base_url('admin') ?>>
          Search Doctor
        </a>
        <a class="navbar-brand brand-logo-mini" href=<?= base_url('admin') ?>>
          Search Doctor
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center" style="background-color: #2c3e50">

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Richard V.Welsh</span>
              <img class="img-xs rounded-circle" src=<?= base_url('assets/img/faces/face1.jpg') ?> alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item"></a>
              <a class="dropdown-item">
                Perfil
              </a>
              <a class="dropdown-item">
                Sair
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href=<?= base_url('admin/perfil') ?>>
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Perfil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?= base_url('admin/servicos') ?>>
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Serviços</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?= base_url('admin/medicos') ?>>
              <i class="menu-icon mdi mdi-human"></i>
              <span class="menu-title">Médicos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?= base_url('admin/avaliacoes') ?>>
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Avaliações</span>
            </a>
          </li>


        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Acessos</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">5,650</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>Visitantes
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Avaliações</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">120</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Desde 14/06/2018
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-human text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Médicos</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">20</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Junta médica especializada
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <!--weather card-->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Avaliações</h4>
                  <div class="row d-none d-sm-flex mb-4">
                    <div class="col-4">
                      <h5 class="text-primary">Bom</h5>
                      <p>34657</p>
                    </div>
                    <div class="col-4">
                      <h5 class="text-primary">Regular</h5>
                      <p>45673</p>
                    </div>
                    <div class="col-4">
                      <h5 class="text-primary">Ruim</h5>
                      <p>45673</p>
                    </div>
                  </div>
                  <div class="chart-container">
                    <canvas id="dashboard-area-chart" height="100"></canvas>
                  </div>
                </div>
              </div>
              <!--weather card ends-->
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-primary mb-5">Histórico de Performance</h2>
                  <div class="wrapper d-flex justify-content-between">
                    <div class="side-left">
                      <p class="mb-2">The best performance</p>
                      <p class="display-3 mb-4 font-weight-light">+45.2%</p>
                    </div>
                    <div class="side-right">
                      <small class="text-muted">2017</small>
                    </div>
                  </div>
                  <div class="wrapper d-flex justify-content-between">
                    <div class="side-left">
                      <p class="mb-2">Worst performance</p>
                      <p class="display-3 mb-5 font-weight-light">-35.3%</p>
                    </div>
                    <div class="side-right">
                      <small class="text-muted">2015</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script src=<?= base_url('assets/vendor/js/vendor.bundle.base.js') ?>></script>
  <script src=<?= base_url('assets/vendor/js/vendor.bundle.addons.js') ?>></script>
  <script src=<?= base_url('assets/js/off-canvas.js') ?>></script>
  <script src=<?= base_url('assets/js/misc.js') ?>></script>
  <script src=<?= base_url('assets/js/dashboard.js') ?>></script>
</body>

</html>
