<html>
	<head>
		<?php echo"<title>Bolcheviques - " . $pg ."</title>"; ?>
		<link rel="icon" type="image/png" href="bolcheviques/img/Clover.png" />
		<link href="https://fonts.googleapis.com/css?family=Boogaloo|Sigmar+One" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="bolcheviques/css/bolcheviques.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<nav class="principal">
				 <ul>
					 <a href='index.php?pg=inicio'><li>INICIO</li></a>
					 <a href='index.php?pg=llantos'><li>LLANTOS Y LLOROS</li></a>
					 <a href='index.php?pg=competiciones'><li>COMPETICIONES</li></a>
					 <a href='index.php?pg=clan&tag=clan/P2L9VVL'><li>NUESTRO CLAN</li></a>
					 <a href='index.php?pg=clan&tag=clan/2YYGQU98'><li>NUESTRA CANTERA</li></a>
					 <a href='index.php?pg=dictadores'><li>NUESTROS DICTADORES</li></a>
					 <a href='index.php?out=true'><li>SALIR</li></a>
				 </ul>
		 </nav>
	    <header><h1><img id="logo" src="bolcheviques/img/Clover.png" /><span id="nombreclan">Bolcheviques</span></h1></header>
			<img src="bolcheviques/img/cocamonga.jpg" class='banner' />
			<img src="bolcheviques/img/bolafuego.jpg" class='banner' />
			<img src="bolcheviques/img/legendaria.jpg" class='banner' />
			<script src="bolcheviques/js/carousel.js"></script>

			<audio class='audio' src="bolcheviques/sfx/soundtrack.mp3" type="audio/mp3" controls="controls" >
				Your browser does not support the audio tag.
			</audio>
				<?php echo"<span class='nombrePagina'>". strtoupper($pg)."</span>"; ?>
