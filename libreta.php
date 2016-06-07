<?php

    require_once 'php/conexion.php';

            $sql1= "select * from libretadirecciones";    

            $query = $con->query($sql1);
            $arraydeTipos = array();
            $arraydeCiudades = array();
            $arraydeTipoDireccion = array();

            while ($r=$query->fetch_array()) {
                array_push($arraydeTipos, $r);
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
            <li><a class="selected" href="services.html">Servicios</a></li>
            <li><a href="contact.php">Contacto</a></li>
            <li><a href="libreta.php">Libreta</a></li>
        </ul>
    </nav>
    <br><br><br>
    <div class="clear">
        <section id="articles" class="text-center">
               <br></br>
               <h2>Libreta</h2>

               <div class="datagrid">
                <table>
                    <thead>
                        <tr class="text-center">
                            <th>Teléfono</th>
                    <th>IdPersona</th>
                    <th>Detalle</th>
                    <th>Tipo Teléfono</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <?php
                            for ($i=0; $i < count($arraydeTipos) ; $i++) { 
                            ?>
                            <tr class="text-center">
                                <td><?php echo $arraydeTipos[$i][0]; ?></td>
                                <td><?php echo $arraydeTipos[$i][1]; ?></td>
                                <td><?php echo $arraydeTipos[$i][2]; ?></td>
                                <td><?php echo $arraydeTipos[$i][3]; ?></td>
                            </tr>
                            <?php
                             } 
                        ?>
                    </tbody>
                    </table>
                </div>
        </section>
    </div>
    <br></br>       
    </body>
    <footer>
        <?php include 'footer.php';?>

    </footer>
</html>