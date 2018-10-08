<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search Doctor</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <style type="text/css">

    </style>

  </head>

  <body id="page-top" class="bg-primary">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Search Doctor</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a href="login.php" class="nav-link btn-primary py-3 px-0 px-lg-3 rounded ">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container" style="padding-right: 13%; padding-left: 13%;">
        <form>
          <input placeholder="Digite aqui!" type="text" data-provide="typeahead" class="form-control form-control-lg">
          <br>
          <!-- Filtro de informações -->
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Localização" name="localizacao">
            </div>
            <div class="col">
               <select id="inputState" class="form-control" name="servico">
                  <option selected>Serviço</option>
                  <option>...</option>
              </select>
            </div>
            <div class="col">
               <select id="inputState" class="form-control" name="convenio">
                  <option selected>Convênio</option>
                  <option>...</option>
              </select>
            </div>
            <div class="col">
               <select id="inputState" class="form-control" name="convenio">
                  <option selected>Avaliação</option>
                  <option>Melhores avaliados</option>
                  <option>Piores avaliados</option>
              </select>
            </div>
          </div>
          <br>
          <input type="submit" value="Buscar" class="btn btn-lg btn-secondary btn-block" name="">
        </form>
        <!-- Tabela de resultado -->
        <br>
        <br>
        <table class="table table-dark bg-secondary">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Primeiro</th>
              <th scope="col">Último</th>
              <th scope="col">Nickname</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </header>

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
