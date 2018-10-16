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

            //Algoritmo ATM
            //Elige el 1er cliente del API
            $initial = $data['data']['0']['Brand']['0']['ATM']['0'];
            //print_r($initial);
            //echo "<br>";

            //Accessibility

            if (array_key_exists('Accessibility',$initial)){
            echo "Accessibility exists...";

            }else{
            echo "Accessibility not exist...";
            }
            echo "<br>";
            //Access24HoursIndicator

            if (array_key_exists('Access24HoursIndicator',$initial)){
            echo "Access24HoursIndicator exists...";
            }else{
            echo "Access24HoursIndicator not exist...";
            }
            echo "<br>";
            //SupportedLanguages

            if (array_key_exists('SupportedLanguages',$initial)){
            echo "SupportedLanguages exists...";
            }else{
            echo "SupportedLanguages not exist...";
            }
            echo "<br>";
            //Identification

            if (array_key_exists('Identification',$initial)){
            echo "Identification exists...";
            }else{
            echo "Identification not exist...";
            }
            echo "<br>";
            //MinimumPossibleAmount

            if (array_key_exists('MinimumPossibleAmount',$initial)){
            echo "MinimumPossibleAmount exists...";
            }else{
            echo "MinimumPossibleAmount not exist...";
            }
            echo "<br>";
            //Note

            if (array_key_exists('Note',$initial)){
            echo "Note exists...";
            }else{
            echo "Note not exist...";
            }
            echo "<br>";
            //OpenBankingATM

            if (array_key_exists('OpenBankingATM',$initial)){
            echo "OpenBankingATM exists...";
            }else{
            echo "OpenBankingATM not exist...";
            }
            echo "<br>";
            //SupportedCurrencies

            if (array_key_exists('SupportedCurrencies',$initial)){
            echo "SupportedCurrencies exists...";
            }else{
              echo "SupportedCurrencies not exist...";
            }
            echo "<br>";
            //OtherAccessibility

            if (array_key_exists('OtherAccessibility',$initial)){
              echo "OtherAccessibility exists...";
            }else{
            echo "OtherAccessibility not exist...";
            }
            echo "<br>";
            //OtherATMServices

            if (array_key_exists('OtherATMServices',$initial)){
              echo "OtherATMServices exists...";
            }else{
            echo "OtherATMServices not exist...";
            }
            echo "<br>";
            //Branch

            if (array_key_exists('Branch',$initial)){
              echo "Branch exists...";
            }else{
            echo "Branch not exist...";
            }
            echo "<br>";

            //Location

            if (array_key_exists('Location',$initial)){
              echo "Location exists...";
              //Site

              if (array_key_exists('Site',$initial['Location'])){
              echo "  Site exists...";
              
              }else{
              echo "  Site not exist...";
              }
              echo "<br>";
              //PostalAddress

              if (array_key_exists('PostalAddress',$initial['Location'])){
              echo "  PostalAddress exists...";
              
              }else{
              echo "  PostalAddress not exist...";
              }
              echo "<br>";
              //BranchExternal

              if (array_key_exists('BranchExternal',$initial['Location'])){
              echo "  BranchExternal exists...";
              
              }else{
              echo "  BranchExternal not exist...";
              }
              echo "<br>";
              //BranchLooby

              if (array_key_exists('BranchLooby',$initial['Location'])){
              echo "  BranchLooby exists...";
              
              }else{
              echo "  BranchLooby not exist...";
              }
              echo "<br>";

              //Other

              if (array_key_exists('Other',$initial['Location'])){
              echo "  Other exists...";
              
              }else{
              echo "  Other not exist...";
              }
              echo "<br>";

              //RetailerOutlet

              if (array_key_exists('RetailerOutlet',$initial['Location'])){
              echo "  RetailerOutlet exists...";
              
              }else{
              echo "  RetailerOutlet not exist...";
              }
              echo "<br>";

              //PostalAddress

              if (array_key_exists('PostalAddress',$initial['Location'])){
              echo "  PostalAddress exists...";
              
              }else{
              echo "  PostalAddress not exist...";
              }
              echo "<br>";

              //RemoteUnit

              if (array_key_exists('RemoteUnit',$initial['Location'])){
              echo "  RemoteUnit exists...";
              
              }else{
              echo "  RemoteUnit not exist...";
              }
              echo "<br>";

              //Latitude

              if (array_key_exists('Latitude',$initial['Location'])){
              echo "  Latitude exists...";
              
              }else{
              echo "  Latitude not exist...";
              }
              echo "<br>";

              //OtherLocationCategory

              if (array_key_exists('OtherLocationCategory',$initial['Location'])){
                echo "  OtherLocationCategory exists...";               
                echo "<br>";
                //Description

                if (array_key_exists('Description',$initial['Location']['OtherLocationCategory'])){
                echo "  Description exists...";
              
                }else{
                echo "  Description not exist...";
                }
                echo "<br>";
                //Name

                if (array_key_exists('Name',$initial['Location']['OtherLocationCategory'])){
                echo "  Name exists...";
              
                }else{
                echo "  Name not exist...";
                }
                echo "<br>";
              
              }else{
              echo "  OtherLocationCategory not exist...";
              }
              echo "<br>";

              //Longitude

              if (array_key_exists('Longitude',$initial['Location'])){
              echo "  Longitude exists...";
              
              }else{
              echo "  Longitude not exist...";
              }
              echo "<br>";

              //LocationCategory

              if (array_key_exists('LocationCategory',$initial['Location'])){
              echo "  LocationCategory exists...";
              
              }else{
              echo "  LocationCategory not exist...";
              }
              echo "<br>";

            }else{
            echo "Location not exist...";
            }
            echo "<br>";

            //ATMServices

            if (array_key_exists('ATMServices',$initial)){
            echo "ATMServices exists...";
            }else{
            echo "ATMServices not exist...";
            }
            echo "<br>";


            echo "<br>";

            echo "Prueba: ", print_r($data['meta']['Prueba'], true);

            echo "<br>";

           

            //echo "API: ", print_r($data['meta']);

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
