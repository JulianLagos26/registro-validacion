<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./estilo/login.css">
  <link rel="stylesheet" href="./estilo/normalize.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="https://kit.fontawesome.com/d9da126b23.js" crossorigin="anonymous"></script>
  <title>Javem</title>
</head>

<body>



  <nav>
    <img src="./imagenes/logo tellosa.png" alt="">

    <ul>
        <li><a href="">MI RESERVA</a> </li>
        <li><a href="">DESTINOS</a> </li>
        <li><a href="">TELLOSA</a> </li>
        <li><a href="login.html"><i class="fa-solid fa-user"></i></a></li> 
    </ul>
   
</nav>
  <header>
    <div id="menulateral">
      <span class="menulateral">&#x2261;</span>
      <ul>
        <li class="margen"><a href=""> MI RESERVA</li></a>
        <li class="margen"><a href="">DESTINOS</li></a>
        <li class="margen"><a href="">TELLOSA</li></a>
        <li><a href="login.html"><i class="fa-solid fa-user"></i></a></li>
      </ul>
    </div>
  </header>
  <div class="form-cont sign-up">
    <div class="cont-msj">
      <div class="mensaje">
        <h2>Bienvenido</h2>
        <p> ¿tienes una cuenta? inicia sesion aqui</p>
        <button class="sign-up-btn">Iniciar Sesion</button>
      </div>
    </div>
    <form class="formularioR" action="index.php?c=Cliente&m=registro" method="post"> 
      <h2 class="crear">Crear una cuenta</h2>
      <input class="inputt" type="number" placeholder="ci" id="ci" name="ci" required>
      <input class="inputt2" type="text" placeholder="Nombre" id="nombre" name="nombre" required>
      <input class="inputt3" type="text" placeholder="Apellido" id="apellido" name="apellido" required>
      <input class="inputt4" type="number" placeholder="Edad" id="edad" name="edad" required>
      <input class="inputt5" type="number" placeholder="celular" id="celular" name="celular" required>
      <input class="inputt6" type="email" placeholder="Email" id="email" name="email" required>
      <input class="inputt7" type="password" placeholder="Contrasena" id="contrasena" name="contrasena" required>
      <button type="submit">crear</button>
    </form>
  </div>
  <div class="form-cont sign-in">
    <form class="formularioi" action="" method="post"> 
      <h2 class="crear">Iniciar Sesion</h2>
      <input class="inputt" type="email" placeholder="Email" required>
      <input class="inputt" type="password" placeholder="Contraseña" required>
      <div class="checkbox-content">
        <input type="checkbox">
        <label>Recuerdame</label>
      </div>
      <input type="submit" value="Iniciar Sesion">
    </form>
    <div class="cont-msj">
      <div class="mensaje">
        <h2>Bienvenido de nuevo</h2>
        <p>¿Aun no tienes cuenta? crea una aqui</p>
        <button class="sign-in-btn">Registrarse</button>
      </div>
    </div>
  </div>


  <div id="footer">
    <h2>made by JAVEM DEVELOPMENT © 2023</h2>
    <a href="./politicas_privacidad.html" target="_blank">Politicas de privacidad</a>
    <a href="./politicas_empresa.html" target="_blank">Politicas de la empresa</a>
    <a href="./terminos.html" target="_blank">Terminos de uso</a>
    <a href="./Politica_reembolsos.html" target="_blank">Politica de reembolso</a>
    <img src="./imagenes/VERSION EXTENSA BLANCA.PNG" alt="">
</div>
  <script src="index.js"></script>
</body>

</html>
