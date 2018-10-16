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
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #2c3e50">
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
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-human">Médicos</span>
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
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-2"><h3 class="card-title mb-3">Médicos</h3></div>
                    <div class="col-md-5"><button type="button" class="btn btn-success btn-sm" >Novo</button></div>


                  </div>
                  <div class="fluid-container">
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src=<?= base_url('assets/img/faces/face1.jpg') ?> alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">James Vietnamita :</p>
                          <p class="text-primary mr-1 mb-0">[78.425.986/0036-15]</p>
                          <p class="mb-0 ellipsis">Cardiologia</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Formado bla bla bla
                          UFMG blablabla
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Last responded :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-reply fa-fw"></i>Editar</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-times text-danger fa-fw"></i>Excluir</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src=<?= base_url('assets/img/faces/face1.jpg') ?> alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">James Vietnamita :</p>
                          <p class="text-primary mr-1 mb-0">[78.425.986/0036-15]</p>
                          <p class="mb-0 ellipsis">Cardiologia</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Formado bla bla bla
                          UFMG blablabla
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Last responded :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-reply fa-fw"></i>Editar</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-times text-danger fa-fw"></i>Excluir</a>
                          </div>
                        </div>
                      </div>
                    </div><div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src=<?= base_url('assets/img/faces/face1.jpg') ?> alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">James Vietnamita :</p>
                          <p class="text-primary mr-1 mb-0">[78.425.986/0036-15]</p>
                          <p class="mb-0 ellipsis">Cardiologia</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Formado bla bla bla
                          UFMG blablabla
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Last responded :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-reply fa-fw"></i>Editar</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-times text-danger fa-fw"></i>Excluir</a>
                          </div>
                        </div>
                      </div>
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
              <a href="http://www.bootstrapdash.com/" target="_blank">Search Doctor</a>. Todos os direitos reservados.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Feito com 
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
