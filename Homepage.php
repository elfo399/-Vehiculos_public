<?php

session_start();


if(!isset($_SESSION['mail'])) {
  header('Location: index.php');
}

if (isset($_POST['logout'])) {
  session_destroy();
  header('Location: index.php');
}



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
<section class="vh-100" style="background-color: #eee;">
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
        <form method="POST" action="Homepage.php">
          <button type="submit" name="logout" class="btn btn-primary btn-lg">cerrar sesión</button>
        </form>
        <hr>
        </div>
        <div class="card text-black" style="border-radius: 25px;">
          
          <div class="card-body p-md-5">
            
            <div class="row justify-content-center">
              
              <table border="1px">
                <tr>
                  <td align="center">
                    <b>
                      Ciudad
                    </b>
                  </td>
                  
                </tr>

                <tr>
                  <td align="center">
                    <b>
                      <a href="ciudad.php?ID=2">Albacete</a>
                    </b>
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    <b>
                      <a href="ciudad.php?ID=13">Ciudad Real</a>
                    </b>
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    <b>
                      <a href="ciudad.php?ID=16">Cuenca</a>
                    </b>
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    <b>
                      <a href="ciudad.php?ID=19">Guadalajara</a>
                    </b>
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    <b>
                      <a href="ciudad.php?ID=45">Toledo</a>
                    </b>
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