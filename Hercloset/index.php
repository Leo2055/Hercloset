<!DOCTYPE html>
<html lang="es">
<head>
	<!--Etiquetas META -->
	<meta charset="UTF-8">
	<!--Para el Motor de busqueda-->
	<meta name="description" content="Tienda On-line de ropa para mujer - HERCLOSET">
	<meta name="keywords" content="Mujeres, Vestidos, Barata">
	<!-- <meta http-equiv="language" content="es"> -->
	<meta name="distribution" content="global">
	<!-- Al lanzar la pagina oficial, colocar "index"-->
	<meta name="robots" content="noindex">
	<link rel="stylesheet" type="text/css" href="Estilos.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link href = "https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel = "stylesheet">
	<title>HerCloset</title>
</head>
<body>
	<div class="global">
		<header>
			<div class="menu-principal">
				<a href="index.php"><img id="logo-hercloset" src="img/Logo_Hercloset.jpeg" alt="HerCloset"></a>
				<ul class="menu-options">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Contactos</a></li>
					<li><a href="#">Ubicación</a></li>
					<li><a href="#">Iniciar sesión</a></li>
				</ul>
			</div>
		</header>
		<nav class="Content-center">
			<div class="contenedor-nav1">
				<h3 id="nav-1">Tienda On-line de ropa para mujeres</h3>
			</div>
		</nav>
		<div class="Content-center-2">
			<div class="info">
				<p>Blusas, Vestidos, Enterizos, y mucho más ... encuéntralos aquí en <b>HerCloset</b></p>
			</div>
			<form action="Grid.php" method="POST">
				<input type="text" name="Buscar" id="input-Buscar" placeholder="Vestidos" autocomplete="off" autofocus="autofocus" size="30" style="height: 30px" required>
				<button type="submit" onclick="" name="Found" id="btn-Buscar" style="width: 140px; height: 35px">Buscar</button>
				<br>
				<button type="submit" onclick="" name="Vestidos" class="btn-categorias" id="btn-Todos" style="width: 140px; height: 35px">Todos</button>
				<button type="submit" onclick="" name="Vestidos" class="btn-categorias" id="btn-Vestidos" style="width: 140px; height: 35px">Vestidos</button>
				<button type="submit" onclick="" name="Blusas" class="btn-categorias" id="btn-Blusas" style="width: 140px; height: 35px">Blusas</button>
				<button type="submit" onclick="" name="Crop-Top" class="btn-categorias" id="btn-CropTops" style="width: 140px; height: 35px">Crop Top´s</button>
				<button type="submit" onclick="" name="Faldas" class="btn-categorias" id="btn-Faldas" style="width: 140px; height: 35px">Faldas</button>
			</form>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>
			<p>lorem</p>

			<footer>
				<div class="contenedor-footers">
					<div class="content-footer-2">
						<ul>
							<li><a href="#">Promociones Vigentes</a></li>
							<li><a href="#">Preguntas Frecuentes</a></li>
							<li><p>© 2020 HerCloset</p></li>
						</ul>
					</div>
					<div class="content-footer-pri">
						<p> Métodos de pago</p>
						<div class="content-footer-3">
							<img src="img/transferencia-bancaria.png" alt="Transferencia Bancaria" class="images">
							<p>Transferencia Bancaria</p>
							<img src="img/tarjeta-de-credito.png" alt="Tarjeta de Credito" class="images">	
							<p> Tarjeta de Crédito o Débito</p>
							<img src="img/deposito.png" alt="Deposito Bancario" class="images">
							<p> Deposito Bancario</p>
						</div>
					</div>
					<div class="content-footer">
						<p>Síguenos en:</p>
							<div class="content-footer-4">
								<img src="img/facebook.png" alt="Facebook" class="images-2"> 
								<p><a href="#">Facebook</a></p>
							</div>
							<div class="content-footer-4">
								<img src="img/instagram.png" alt="Instagram" class="images-2">
								<p><a href="#">Instagram</a></p>	
							</div>
							<div class="content-footer-4">
							 <img src="img/whatsapp.png" alt="WhatsApp" class="images-2">
							<p><a href="#">WhatsApp</a></p> 
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>