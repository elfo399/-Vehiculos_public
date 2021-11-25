<?php

session_start();


if(!isset($_SESSION['mail'])) {
  header('Location: index.php');
}

if (isset($_POST['logout'])) {
  session_destroy();
  header('Location: index.php');
}

require "Backend/RetriveRecordFromDBCommandExecutor.php";
$retriveRecordFromDBCommandExecutor = new RetriveRecordFromDBCommandExecutor();
$resultRetriveRecordFromDBCommandExecutor = $retriveRecordFromDBCommandExecutor->handleWorkflow($_GET['ID'] , $_GET['CODICE']);


?>

<!DOCTYPE html>
<html>
<head>
  <title>vehiculos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<section class="vh-100" style="background-color: #ffffff;">
  <div class="container h-100">
    <img src="img/logo_size.jpg"class="img-fluid" alt="Sample image">
    <div class="row d-flex justify-content-center align-items-center h-100">
       
      <div class="col-lg-12 col-xl-11">
        
        <div align="right">
        <?php
        if ($_SESSION['ruolo'] == 'S') {
          echo "<button type=\"submit\" name=\"conferma\" class=\"btn btn-primary btn-lg\">crear administrador</button>";
        }
        
        ?>
        <form method="POST" action="info.php">
          <button type="submit" name="logout" class="btn btn-primary btn-lg">cerrar sesión</button>
        </form>
        <hr>
        </div>
        <div class="card text-black" style="border-radius: 25px;">
          
          <div class="card-body p-md-5">
            
            <div class="row justify-content-center">
                <table border="1px">
                  <tr>
                    <td>
                      Id
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getId(); ?>
                    </td>
                  </tr>
                   <tr>
                    <td>
                      Codigo
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getCodigo(); ?>
                    </td>
                  </tr>
                   <tr>
                    <td>
                      Municipio
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getMunicipio(); ?>
                    </td>
                  </tr>
                   <tr>
                    <td>
                      Furgonetas_camiones()
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getFurgonetas_camiones(); ?>
                    </td>
                  </tr>
                   <tr>
                    <td>
                      Autobuses
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getAutobuses(); ?>
                    </td>
                  </tr>
                   <tr>
                    <td>
                      Turismos
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getTurismos(); ?>
                    </td>
                  </tr>
                   <tr>
                    <td>
                      Motocicletas
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getMotocicletas(); ?>
                    </td>
                  </tr>
                   <tr>
                    <td>
                      Tractores_industriales
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getTractores_industriales(); ?>
                    </td>
                  </tr>
                   <tr>
                    <td>
                      Remolques_semirremolques
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getRemolques_semirremolques(); ?>
                    </td>
                  </tr>
                   <tr>
                    <td>
                      Otros
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getOtros(); ?>
                    </td>
                  </tr>
                   <tr>
                    <td>
                      Total
                    </td>
                    <td>
                      <?php echo $resultRetriveRecordFromDBCommandExecutor->getTotal(); ?>
                    </td>
                  </tr>
                </table>
            </div>
          </div>
        </div>
        <br><div align="center"><b>Creado por Gabriele Zullo, Simone Occulto, Giuseppe Roma</b></div>
      </div>
    </div>
  </div>
</section>
</body>
</html>