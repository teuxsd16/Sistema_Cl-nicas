<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search Doctor</title>

    <!-- Bootstrap core CSS -->
    <link href=<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?> rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href=<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?> rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href=<?= base_url('assets/vendor/magnific-popup/magnific-popup.css') ?> rel="stylesheet" type="text/css">

    <!-- Custom styles for this template
    <link href=<?= base_url('assets/css/freelancer.min.css') ?> rel="stylesheet">-->
    <link href="<?= base_url('assets/css/landing-page.css') ?>" rel="stylesheet">

    <style type="text/css">

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-dark static-top" style="background-color: #2c3e50!important;">
      <div class="container">
        <a class="navbar-brand" href="#">Search Doctor</a>
      </div>
    </nav>


    <!-- Header -->
    <header class="masthead bg-primary text-white text-center" style="background-color: #18bc9c!important;padding-top: 100px;">
      <div class="container" style="padding-right: 10%; padding-left: 10%;">
        <form>
          <input placeholder="Digite aqui!" type="text" data-provide="typeahead" class="form-control form-control-lg">
          <br>
          <!-- Filtro de informações -->
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Localização" name="localizacao">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Médico" name="medico">
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
          <input type="submit" value="Buscar" class="btn btn-lg btn-dark btn-block" name="">
        </form>
        <!-- Tabela de resultado -->
        <br>
        <br>
        <table class="table bg-dark table-dark">
          <thead>
            <tr>
              <th scope="col">Número</th>
              <th scope="col">Instituição</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
            </tr>
          </tbody>
        </table>
      </div>
    </header>



    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src=<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>></script>

    <!-- Plugin JavaScript -->
    <script src=<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>></script>
    <script src=<?= base_url('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') ?>></script>

    <!-- Contact Form JavaScript -->
    <script src=<?= base_url('assets/js/jqBootstrapValidation.js') ?>></script>
    <script src=<?= base_url('assets/js/contact_me.js') ?>></script>

    <!-- Custom scripts for this template
    <script src=<?= base_url('assets/js/freelancer.min.js') ?>></script>-->

  </body>

</html>
