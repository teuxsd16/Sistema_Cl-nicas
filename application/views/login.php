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

          <form action="/" method="post">

          
          <div class="field-wrap">
            <label>
              Nome<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" />
  
          </div>

        

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Telefone<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <select>
              <option>Cliente</option>
              <option>Médico</option>
              <option>Clínica</option>
            </select>
          </div>

          <div class="invisible">
            <!-- Médico -->
            <div class="field-wrap">
              <label>
                CRN<span class="req">*</span>
              </label>
              <input name="crn" type="text"required autocomplete="off"/>
            </div>
          </div>  
          <div class="invisible">
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




</body>

</html>
