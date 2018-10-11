<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ISO</title>
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

    <script>
       $(document).ready(function() {
          $('select').material_select();
       });
    </script>

  </head>

  <body>
    <div class="navbar-fixed">
    <nav class="navbar-fixed blue">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Open Banking</a>
      </div>
    </nav>
    </div>

    <br>

    <div class="row">
    <div class="col s12">
    <div class="row">
      <form action="index.php" method="post" class="col s12">
        <div class="row">
          <div class="input-field col s7">
            <i class="material-icons prefix">publick</i>
            <input id="icon_prefix" type="text" name="api_URL" class="validate">
            <label for="icon_prefix">URL de la API</label>
          </div>
          <div class="input-field col s3">
            <select multiple>
              <option value="" disabled selected>Choose</option>
              <option value="1">Endpoint - ATM</option>
              <option value="2">Endpoint - Branch</option>
              <option value="3">CCC- core product</option>
            </select>
            <label>Analizar</label>
          </div>

          <div class="col s2">
            <button class="btn waves-effect blue btn-large" type="submit" name="action">Analizar
              <i class="material-icons left">autorenew</i>
            </button>
          </div>
        </div>
      </form>
    </div>
    </div>
  </div>


    <div class="row">
    <div class="col s12 m4">
      <div class="card blue">
        <div class="card-content white-text">
          <span class="card-title">Meta de API: <?php echo htmlspecialchars($_POST['api_URL']);?></span><br>

          <?php
            $url = ($_POST['api_URL']);
            // echo "$url"; //imprime la url a analizar
            $data = json_decode(file_get_contents($url), true);
            // print_r($data); //imprime toda la API en Json

            echo "LastUpdated: ", $data['meta']['LastUpdated'];
            echo "<br>";

            echo "TotalResults: ", $data['meta']['TotalResults'];
            echo "<br>";

            echo "Agreement: ", $data['meta']['Agreement'];
            echo "<br>";

            echo "License: ", print_r($data['meta']['License'], true);
            echo "<br>";

            echo "TermsOfUse: ", print_r($data['meta']['TermsOfUse'],true);
            echo "<br>";


            echo "Prueba: ", print_r($data['meta']['Prueba'], true);

            echo "<br>";

            if (condition) {
              // code...
            }

            // echo "API: ", print_r($data);

          ?>
        </div>
        <div class="card-action">
          <a href="<?php echo htmlspecialchars($_POST['api_URL']);?>">Ver data</a>
        </div>
      </div>
    </div>
  </div>




  <script>
           $(document).ready(function() {
              $('select').material_select();
           });
  </script>

  </body>
</html>
