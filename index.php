<!DOCTYPE html>
<?php include 'contador.php';?>
<html>
<head>
	<meta charset="utf-8">
	<title>ACA Maquinas - Inicio</title>
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
            <li><a class="selected" href="index.php">Inicio</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="login.php">Login</a>
            <li><a href="about.php">Quienes somos</a></li>
            <li><a href="products.php">Productos</a></li>
            <li><a href="services.php">Servicios</a></li>
            <li><a href="contact.php">Contacto</a></li>
            <li><a href="libreta.php">Libreta</a></li>
        </ul>
    </nav>
    <section id="intro">
    	<header>
    		<h2>Somos su proveedor de confianza</h2>
        </header>
        <p>Nuestras modernas máquinas, garantizan la calidad de su negocio. Prestamos
		servicio para la industria de alimentos, sierras cortadora de huesos y pescado congelado</p>
        <a href="/">M&aacute;s Info</a>
        <div id="photo">
        	<div>
               <br/>
				<img src="images/ppersona.jpg" alt="Pesa Personas" />
            </div>
        </div>
    </section>
    <div id="main" class="clear">
   	
		
		    <script  src="calculeimc.js"></script>	

			<section id="articles">
				<h2>&Iacute;ndice de Masa Corporal</h2>
				
				  <article class="blogPost">
                <header>
                    <h3>Calculadora</h3>
                    <p>Publicado el <time  datetime="2009-06-29T23:31:45-09:00">May 13</time> by <a href="#">Lady S</a> - <a href="#comments">3 comments</a></p>
                </header>
				
				
				<p>En el siguiente cuadro, encontrarás una calculadora para obtener el IMC de una persona, s&oacute;lo introduce los datos y listo.
				 La fórmula permite medir la composición corporal y ha demostrado ser una manera eficaz y simple de determinar el estado nutricional de una persona.
				</p>
				
				<form>
				     <label for="altura">Escribe tu ALTURA actual en cm.</label>
					 <input id="altura" required size="8">
					 <label for="peso"> y escribe tu PESO en kg.</label>
					 <input id="peso" required size="8">
				   		<br /> 
						<label for="imc">Resultado IMC:</label>
						<input id="imc" size="8">  		<br />
                
              <input type="button" value="Consulte &raquo;" onClick="calculeimc(this.form)" name="button" class="large blue awesome"> 				  
					</form>					
					<p>Recuerda: Es importante introducir tu altura en centimetros en lugar de en metros 
					en la casilla de altura. De esta forma, si mides 1.70 metros, deber&aacute;s escribir 170 en el cuadro de altura. </p>
					<p>Un IMC normal se encuentra entre 18.5 y 24.99, recuerde consultar a su m&eacute;dico una vez al año <b> esta ayuda no pretender reemplazar a un profesional de la salud</b></p>
			   </article>
			
			</section>
		
        <aside>
            <section>
                <header>
                    <h3>Categories</h3>
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
            <section>
                <header>
                    <h3>Archives</h3>
                </header>
                <nav id="archives">
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
        <<?php include 'footer.php' ?>
    </footer>
   
</body>
</html>
