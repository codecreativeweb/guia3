<?php

    require_once 'php/conexion.php';

            $sql1= "select * from tipopersona";    

            $query = $con->query($sql1);
            $arraydeTipos = array();
            $arraydeCiudades = array();
            $arraydeTipoDireccion = array();

            while ($r=$query->fetch_array()) {
                array_push($arraydeTipos, $r);
            }
            
        $sql1 = "SELECT * FROM tipodireccion";
        $query = $con->query($sql1);
        while ($r=$query->fetch_array()) {
                array_push($arraydeTipoDireccion, $r);
            }

        $sql = "SELECT * FROM ciudad";
        $query = $con->query($sql);
        while ($r=$query->fetch_array()) {
                array_push($arraydeCiudades, $r);
            }
?>
<?php include 'contador.php';?>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheets/default.css">
        <script type="text/javascript" src="javascripts/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="javascripts/registro.js"></script>
    </head>
    <body>
        <header id="mast" class="text-center">
        <h1>Básculas ACA Máquinaria Alimentos</h1>
    </header>
    <nav id="global">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="about.php">Quienes somos</a></li>
            <li><a href="products.php">Productos</a></li>
            <li><a href="services.php">Servicios</a></li>
            <li><a href="contact.php">Contacto</a></li>
            <li><a href="libreta.php">Libreta</a></li>
        </ul>
    </nav>
    <br><br><br><br>
    <div class="clear">
        <section id="articles" class="text-center">
               <h2>Registro</h2>
               <form action="php/registro.php" method="POST">
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" class="form-control" placeholder="Cédula" name="idPersona" id="idPersona" />
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" />
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido" />
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <textarea class="form-control" placeholder="Descripción" name="descripcion" id="descripcion" rows="5"></textarea>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <select name="idCiudad" id="idCiudad" class="form-control">
                        <?php
                            for ($i=0; $i < count($arraydeCiudades) ; $i++) { 
                            ?>
                            <option value="<?php echo $arraydeCiudades[$i][0]; ?>"><?php echo $arraydeCiudades[$i][1]; ?></option>
                            <?php
                             } 
                        ?>
                    </select>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <select name="idTipoPersona" id="idTipoPersona" class="form-control">

                        <?php
                            for ($i=0; $i < count($arraydeTipos) ; $i++) { 
                            ?>
                            <option value="<?php echo $arraydeTipos[$i][0]; ?>"><?php echo $arraydeTipos[$i][1]; ?></option>
                            <?php
                             } 
                        ?>
                    </select>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <input type="email" class="form-control" placeholder="Correo" name="correo" id="correo" />
                </div>
                <br>

                <div class="col-md-6 col-md-offset-3">
                    <select name="idTipoTelefono" id="idTipoTelefono" class="form-control">
                        <option value="1">Celular</option>
                        <option value="2">Fijo</option>
                    </select>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <input type="number" class="form-control" placeholder="Teléfono" name="telefono" id="telefono" />
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <select name="idTipoDireccion" id="idTipoDireccion" class="form-control">
                        <?php
                            for ($i=0; $i < count($arraydeTipoDireccion) ; $i++) { 
                            ?>
                            <option value="<?php echo $arraydeTipoDireccion[$i][0]; ?>"><?php echo $arraydeTipoDireccion[$i][1]; ?></option>
                            <?php
                             } 
                        ?>
                    </select>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" class="form-control" placeholder="Detalle Dirección" name="detalle" id="detalle" />
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" class="form-control" placeholder="Más Detalles de Dirección" name="detalle2" id="detalle2" />
                </div>
                <br>
                <div class="col-md-6 col-md-offset-3">
                    <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" id="contrasena" />
                </div>

                <br>     
                 <input type="submit" id="btnRegistro" value="Registrar" class="btn blue awesome" />
                </form>
        </section>
    </div>
        
    </body>
    <footer>
       <?php include 'footer.php';?>
    </footer>
</html>