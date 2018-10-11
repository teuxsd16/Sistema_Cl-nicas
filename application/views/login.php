<!DOCTYPE html>
<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <title>Painel de Acesso</title>
  <!-- Bootstrap core CSS -->
    <link href=<?= base_url("vendor/bootstrap/css/bootstrap.min.css") ?> rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href=<?= base_url("css/style.css") ?>>


</head>

<body>

  <div class="form">
      <h1 style="font-weight: bold; font-size: 30pt;">SearchDoctor</h1>

      <ul class="tab-group">
        <li class="tab"><a href="#signup">Cadastrar</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">


        <div id="login">
          <h1>Bem vindo!</h1>

          <form action="/" method="post">

            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block"/>Log In</button>

          </form>

        </div>
        <div id="signup">
          <h1>Cadastre-se grátis</h1>

          <form action="login/cadastrar/" method="post">


          <div class="field-wrap">
            <label>
              Nome<span class="req">*</span>
            </label>
            <input name="nome" type="text" required autocomplete="off" />

          </div>



          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input name="email" type="email" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Telefone<span class="req">*</span>
            </label>
            <input name="tel" type="tel" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input name="senha" type="password" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <select id="select-tipo-usuario">
              <option value="cliente">Cliente</option>
              <option value="medico">Médico</option>
              <option value="clinica">Clínica</option>
            </select>
          </div>

          <div id="div-medico" class="collapse">
            <!-- Médico -->
            <div class="field-wrap">
              <label>
                CRM<span class="req">*</span>
              </label>
              <input name="crn" type="text"required autocomplete="off"/>
            </div>
          </div>
          <div id="div-clinica" class="collapse">
            <!-- Clínica/posto -->
            <div class="field-wrap">
              <label>
                CNPJ<span class="req">*</span>
              </label>
              <input name="cnpj" type="text"required autocomplete="off"/>
            </div>
          </div>

          <!-- Endereço -->
          <div class="field-wrap">
            <label>
              Bairro<span class="req">*</span>
            </label>
            <input name="bairro" type="text"required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Rua<span class="req">*</span>
            </label>
            <input name="rua" type="text"required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Número<span class="req">*</span>
            </label>
            <input name="numero" type="text"required autocomplete="off"/>
            </div>

          <button type="submit" class="button button-block"/>Cadastrar</button>

          </form>

        </div>
      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src=<?= base_url("js/index.js") ?>></script>
  <script  src=<?= base_url("vendor/bootstrap/js/bootstrap.min.js") ?>></script>

  <script type="text/javascript">
    $('#select-tipo-usuario').on('change', function() {
      if ($(this).val() == 'medico') {
        $('#div-medico').collapse('show');
        $('#div-clinica').collapse('hide');
      } else if ($(this).val() == 'clinica') {
        $('#div-medico').collapse('hide');
        $('#div-clinica').collapse('show');
      } else {
        $('#div-medico').collapse('hide');
        $('#div-clinica').collapse('hide');
      }
    });
  </script>

</body>

</html>
