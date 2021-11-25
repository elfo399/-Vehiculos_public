<?php

session_start();

if(isset($_SESSION['mail'])) {
  header('Location: Homepage.php');
}

if (isset($_POST['conferma'])) {

	require "Backend/CheckInputRegistrazioneCommandExecutor.php";
	$checkInputRegistrazioneCommandExecutor = new CheckInputRegistrazioneCommandExecutor();
	$resultCheckInputRegistrazioneCommandExecutor = $checkInputRegistrazioneCommandExecutor->handleWorkflow($_POST['Email'], $_POST['Password'], $_POST['Password2']);

	if ($resultCheckInputRegistrazioneCommandExecutor['result']) {
		$password = hash('sha256', $_POST['Password']);

		require "Backend/RegistrazioneCommandExecutor.php";
		$registerCommandExecutor = new RegistrazioneCommandExecutor();
		$registerCommandExecutor->handleWorkflow($_POST['nombre'], $_POST['apellido'], $_POST['Email'], $password);
    header('Location: index.php');
	}
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
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registro</p>
                <b>
                  <p align="center" style="color: red;">
                    <?php
                      if (isset($_POST['conferma'])) {
                        if (!$resultCheckInputRegistrazioneCommandExecutor['result']) {
                          echo $resultCheckInputRegistrazioneCommandExecutor['comment'];
                        }
                      }
                    ?>
                  </p>
                </b>
                
                <form class="mx-1 mx-md-4" method="POST" action="registro.php">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="nombre" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">nombre</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="apellido" class="form-control" required/>
                      <label class="form-label" for="form3Example1c">apellido</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="Email" class="form-control" required/>
                      <label class="form-label" for="form3Example3c">Correo electrónico</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="Password" class="form-control" required/>
                      <label class="form-label" for="form3Example4c">contraseña</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="Password2" class="form-control" required/>
                      <label class="form-label" for="form3Example4cd">repita su contraseña</label>
                    </div>
                  </div>

                  <div align="center">
                    Ya tienes una cuenta?
                    <a href="index.php">
                      Entra Aquì!
                    </a>
                  </div>

                  <br>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="conferma" class="btn btn-primary btn-lg">Registrarse</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="img/flag_img.jpg" class="img-fluid" alt="Sample image">

              </div>
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