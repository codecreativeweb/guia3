<!DOCTYPE html>
<?php include 'contador.php';?>
<html>
<head>
	<meta charset="utf-8">

  
	<title>ACA Maquinas - Contacto</title>
    <link rel="stylesheet" href="stylesheets/default.css">
   
    <script type="text/javascript" src="javascripts/behavior.js"></script>
    <!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
	<header id="mast">
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
            <li><a class="selected" href="contact.html">Contacto</a></li>
            <li><a href="libreta.php">Libreta</a></li>
        </ul>
    </nav>
    <section id="intro">
    	<header>
    		<h2>Estrategicamente ubicados</h2>
        </header>
        <p> Cerca al centro de Bogotá
 
A pocos pasos de la calle 13, en Transmilenio en las estaciones San Facon Cr 22 y Ricaurte.
 
Por la Carrera 30 (NQS), en la estación Ricaurte</p>
        <a href="/">Read More!</a>
        <div id="photo">
        	<div>
               <br/>
				<img src="images/map.jpg" alt="Pesa Personas" />
            </div>
			
			
        </div>
    </section>
    <div id="main" class="clear">
      		
			
			   <section id="articles">
			   <h3>Denos el gusto de atendero en nuestra sede</h3>
               <article class="blogPost">
                <header>
                    <h2>Contacto</h2>
                </header>
               
			   <form>
			    <table>
				<tr>
				<td><label for="contact_name">Nombre:</label>				</td>
								
				<td><input id="contact_name" placeholder="Ingrese su nombre" autofocus required size="50">				</td>
				</tr>
				<tr>
				<td><label for="contact_email">E-mail:</label>				</td>				
				<td><input type="email" id="contact_email" size="50" placeholder="Ingrese su correo electr&oacute;nico" required>
				</td>
				</tr>			
				<tr>
				<td><label for="contact_phone">Tel&eacute;fono:</label>
				</td>
	            <td><input id="contact_phone" placeholder="Ingrese su tel&eacute;fono" size="50">
				</td>
				<tr>
				<td><label for="comentarios">Comentarios: </label>
				</td>
	            <td><input id="comentarios" size="50">
				</td>

				</tr>
		
				
				</table>
				
					<br />
				<input type="submit" value="Aceptar" class="large blue awesome">
					<br />
					
				</form>
				
               </article>
        </section>
			
		
		 <aside>
            <section>
                <header>
                    <h3>Categorias</h3>
                </header>
                <nav id="categories">
                    <ul>
                        <li><a href="/">Page Link</a></li>
                        <li><a href="/">Page Link</a></li>
                        <li><a href="/">Page Link</a></li>
			    	    <li><a href="/">Page Link</a></li>
                        <li><a href="/">Page Link</a></li>
                        <li><a href="/">Page Link</a></li>
                  
                    </ul>
                </nav>
            </section>
        </aside>
		
    </div>
	
	
	
    <footer>
    	       <?php include 'footer.php';?>
    </footer>
</body>
</html>
