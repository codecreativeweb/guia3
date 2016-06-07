<?php include 'contador.php';?>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheets/default.css">
  
        <script type="text/javascript" src="javascripts/behavior.js"></script>
    </head>
    <body>
        <header id="mast" class="text-center">
        <h1>Básculas ACA Máquinaria Alimentos</h1>
    </header>
    <nav id="global">
        <ul>
            <li><a class="selected" href="index.html">Inicio</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="about.html">Quienes somos</a></li>
            <li><a href="products.html">Productos</a></li>
            <li><a href="services.html">Servicios</a></li>
            <li><a href="contact.html">Contacto</a></li>
            <li><a href="libreta.php">Libreta</a></li>
        </ul>
    </nav>
    <section id="intro">
        <header>
            <h2>Acceder</h2>
        </header>
        <p>Accede con tus datos para administrar tu cuenta.</p>
        <div id="photo">
            <div>
               <br/>
                <img src="images/ppersona.jpg" alt="Pesa Personas" />
            </div>
        </div>
    </section>
    <br><br>
    <div class="clear">
        <section id="articles" class="text-center">
               <h2>Iniciar Sesión</h2>
               <form action="php/login.php" method="POST">
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" class="form-control" placeholder="IdPersona" name="idPersona" />
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" />
                </div>
                <br>     
                 <input type="submit" value="Acceder" name="entrar" class="btn blue awesome" />
                </form>
        </section>
    </div>
        
    </body>
    <footer>
        <?php include 'footer.php';?>
    </footer>

</html>