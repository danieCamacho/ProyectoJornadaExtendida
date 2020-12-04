<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/styles/style.css" />
    <title>Inicio de sesión</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">    

          <form action="?controller=login&method=login" method="POST" class="sign-in-form">
            <?php
              if(isset($error['errorMessage'])) {
            ?>
                <div class="alert alert-danger alert-dismissable alert-width" role="alert">
                  <button class="close" data-dismiss="alert">&times;</button>
                  <p class="text-dark"><?php echo $error['errorMessage'] ?></p>
                </div>
            <?php
              }
            ?>
            <img class="logo" src="assets/images/logojornadaextendida.png" >
            <h2 class="title">INICIAR SESIÓN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Correo Electrónico" name="email" value="<?php echo isset($error['email']) ? $error['email'] : '' ?>" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="clave" required/>
            </div>
            
            <div>
              <button class="btn solid">Ingresar</button>
            </div>
          </form>


          <form action="#" class="sign-up-form">
            <img class="logo" src="assets/images/logojornadaextendida.png" >
            <h2 class="title">REGÍSTRATE</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Correo Electrónico" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" />
            </div>
            <input type="submit" class="btn" value="REGISTRARSE" />
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Nuevo aqui ?</h3>
            <p>
              Recuerda que puedes registrar cuando quieras
            </p>
            <button class="btn transparent" id="sign-up-btn">
              REGISTRARSE
            </button>
          </div>
          <img src="assets/images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Haz parte de nosotros </h3>
            <p>
              
            </p>
            <button class="btn transparent" id="sign-in-btn">
              INICIA SESIÓN
            </button>
          </div>
          <img src="assets/images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
