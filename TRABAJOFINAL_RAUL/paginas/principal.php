<?php include '../llamadas/nousuario.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>TABERNERO</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css_estilos/principal.css">
	<meta charset="UTF-8">

</head>
<body>
<!-- CABECERA PRINCIPAL -->
 	<?php include '../partes/cabeceralogin.php'; ?>
    <?php include '../partes/cabecera.php'; ?>	

<!-- PARTE 2 -->
	<section class="Nosotros">
		<h2 class="centrar">NOSOTROS</h2><br><br>
		<div class="Nosotros-contenido">
			<div class="dato centrar">
				<img class="fotos1" src="../Imagenes/mision.jpg">
				<h3>MISIÓN</h3>
				<p>Generar los mejores vinos al agrado de toda la poblacion,  derivados de la mejor uva cultivada por nosotros,la cual gracias a el cuidado del medio ambiente, incrementa la calidad de los vinos.</p>
			</div>
			<div class="dato centrar">
				<img class="fotos1" src="../Imagenes/vision.jpg">
				<h3>VISIÓN</h3>
				<p>Consolidarnos con la industria internacional,expandir fronteras hacia europa y asia, y volvernos los mayores lideres en la venta y comercializacion de vinos.</p>
			</div>
			<div class="dato centrar">
				<img class="fotos1" src="../Imagenes/calidad.jpg">
				<h3>CALIDAD</h3>
				<P>La calidad de nuestros vinos esta réspaldada en nuestros mas de 10 000 hectareas que son administradas por conocedores de la agricultura y cuidado del ambiente para abastecer  al Peru  con el mejor vino.</P>
			</div>
		</div>		
	</section>
	<hr>


<!-- PARTE 3 -->
	<br>
	<section class="productos">
		<h2 class="centrar">NUESTROS PRODUCTOS</h2><br><br>
		<div class="Nosotros-contenido">
			<div class="dato centrar">
				<img src="../Imagenes/11.png">
				<h3>VINOS</h3>
				<p>Interviene la calidad sensorial, es el uso más común del término y el sentido habitual cuando se habla de la "calidad del vino". Se trata inicialmente de la calidad percibida durante la degustación, es decir es la calidad apreciada mediante la cata.</p>
			</div>
			<div class="dato centrar">
				<img src="../Imagenes/pisco_edicion_limitada_italia_tabernero.png">
				<h3>PISCOS</h3>
				<p>El pisco se obtiene de la destilación de cepas blancas y rosadas de las uvas pisqueras, como se les denomina, utilizando métodos ancestrales que mantienen intacta su reconocida calidad.</p>
			</div>
			<div class="dato centrar">
				<img src="../Imagenes/espumante_vittoria_muscat_tabernero.png">
				<h3>ESPUMANTES</h3>
				<p>El espumante se ha impuesto como aperitivo, pues su suavidad y sutiles burbujas predisponen mejor que otras bebidas o cócteles, cuya contundencia y dosaje alcohólico sirven más para anestesiar las papilas gustativas que para estimularlas.</p>
			</div>
		</div>
	</section>
	
	

<!-- PARTE 4 -->
	<br>
	<hr>

	<section class="Articulos"><br><br>
		<h2 class="centrar">ARTÍCULOS</h2>
		<div class="Articulos-colum">
			
			<div id="izquierda">
				<div id="uno">
					<img class="imagen2" src="../Imagenes/3.png">
					
					<div class="colum">
						<P><strong>VINO TINTO BORGOÑA</strong></P>
						Cepa: 80 % Malbec - 20% Merlot<br>
						Vino joven, sin embargo presenta un color violeta intenso. Es muy expresivo en la nariz, destacando frutos negros como la mora, pimiento rojo y con un fondo de mermelada de mora. En boca es fresco y de cuerpo medio, con un suave sabor mineral, taninos amables y un prolongado recuerdo en boca.<br>
						Grado alcohólico: 12% Vol.</p>
					</div>
				</div>
				<br>
				<div id="dos">
					<img class="imagen2" src="../Imagenes/5.png" >
					<div class="colum">
						<strong>VINO ROSE SEMISECO</strong><br><br>
						Cepa: Merlot, Chennin, Muscat de Alejandría<br>
						Color rosado pálido muy atractivo. En nariz predominan notas a cereza, fresa, melocotón. En boca, es frutado y con un dulzor agradable, con ligera acidez pero con persistencia en boca.<br>
						Grado alcohólico: 11% Vol.</p>
					</div>
				</div>
			</div>	
			
			<div id="derecha">
				<div id="image">
					<img class="fotos1" src="../Imagenes/imagen1.jpeg" >
				</div>
				
				
				<div class="colum">
					<h3>CELEBRA LA VIDA CON TABERNERO</h3>
					<p ALIGN="justify">Una vez más, la reconocida bodega Tabernero dejo bien en alto el nombre del Perú.
						Esta vez, "La Botija Pisco Italia 2011", fue premiedo con la "Gran Medalla de Oro", como el
						mejor pisco, dejando atrás a otras bodegas nacionales e internacionales, en el Concurso Mundial
						de Bruselas 2012, realizado en la ciudad Portuguesa de Guima</p>
				</div>
			</div>	
		</div>
	</section>   
    <!-- Pie de página -->
        
        <?php include '../partes/piepagina.php'; ?>
        <!-- Fin pie de pagina -->

</body>
</html>