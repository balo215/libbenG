<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Torre Libben</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="Venta de departamentos libben">
  <meta name="keywords" content="libben departamentos renta venta">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/favicon.ico" />

  <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!-- AZUL 00A19A, GRIS 706F6F, VERDE 008D36, 3AAA35, GRIS FUERTE 575756 -->
</head>
<body class="mobile-shift">

<header>

	<div class="fixed-navbar">

		<div class="navbar-lockup">

			<div class="logo">

				<a href=""><img src="assets/img/logo_t.png" alt="Torre libben"></a>

			</div>

			<ul class="nav">

				<li><a href="index.html">Inicio</a></li>
				<li><a href="galery.html">Galeria</a></li>
				<li><a href="">Contacto</a></li>
				<li><a href="">Informacion adicional</a></li>

			</ul>

		</div>

	</div>

	<div class="claim-lockup">
	<div class="grid" style="top: 225px;">
		<div class="bg-secondary" >	
			<div class="container">
				<div class="row fitness-first">
					
					<div>
						<div>
							<h2>Contactanos!</h2>
						</div>
						<div class="form-group row">
							<label class="col-6 col-form-label">Nombre:</label>
							<div class="col-12">
								<input id="nameComment" type="text" name="nombreC" class="form-control" >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-6 col-form-label">Correo:</label>
							<div class="col-12">
								<input id="emailComment" type="email" name="emailC" class="form-control" required="required">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-6 col-form-label">Comentario:</label>
							<div class="col-12">
								<textarea id="contentComment" name="comment" class="form-control form-control-lg"></textarea>
							</div>
						</div>
						<button id="sendComment">Enviar</button>
					</div>
					
  				</div>
  			</div>
		</div>
		<div class="claim">

			
		</div>

	</div>

	<div class="angled-overlay"></div>

	<div class="slide-out-nav">

		<ul class="mobile-nav">

			<li><a href="">About</a></li>
			<li><a href="">How It Works</a></li>
			<li><a href="">Services</a></li>
			<li><a href="">FAQ</a></li>
			<li><a href="">Contact</a></li>

		</ul>

		<div class="mobile-nav-slice"></div>

	</div>

	<div class="mobile-nav-toggle">

		<span></span>
		<span></span>
		<span></span>

	</div>

</header>
<section>

</section>





<footer>

	<div class="closer">

		<div class="closing-claim">

			<h1>We launch leaders with big ideas</h1>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

		</div>

	</div>

	<div class="bg-angled-left"></div>

	<div class="bg-angled-right"></div>

	<div class="container footer-lockup">

		<div class="red-angle"></div>

		<div class="row">

			<div class="col-lg-7">

				<h3>Resources</h3>

				<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>

			</div>

			<div class="col-lg-8">

				<h3>About us</h3>

				<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>

			</div>

			<div class="col-lg-5">

				<h3>Stay in touch</h3>

				<div class="social-icons">

					<a href=""><i class="icon-facebook"></i></a>
					<a href=""><i class="icon-twitter"></i></a>
					<a href=""><i class="icon-youtube-play"></i></a>
					<a href=""><i class="icon-linkedin"></i></a>

				</div>

			</div>

		</div>

		<div class="row">

			<div class="col-lg-13 col-lg-offset-7">

				<form>

					<input type="text" placeholder="Your Name">

					<input type="email" placeholder="Your Email" spellcheck="false">

					<button class="newsletter-btn" type="submit" value="Join Newsletter">Join Newsletter<i class="icon-chevron-circle-right"></i></button>

				</form>

			</div>

		</div>

	</div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src="assets/js/sweetalert2.js"></script>

</body>
</html>
