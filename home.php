<?php
// Path: home.php
include("head.php");
?>

<?php
// Path: home.php
include("header.php");
?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-6 col-md-6 ">
				<h6 class="text-white ">Need a ride? just call</h6>
				<h1 class="text-uppercase">
					911 999 911
				</h1>
				<p class="pt-10 pb-10 text-white">
					Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel
					experiences by staying in a small.
				</p>
				<a href="#reservation" class="primary-btn text-uppercase">Faire une réservation</a>
			</div>
			<!-- <div class="col-lg-4  col-md-6 header-right">
					<h4 class="pb-30">Book Your Texi Online!</h4>
					<form class="form">
						<div class="from-group">
							<input class="form-control txt-field" type="text" name="name" placeholder="Your name"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
							<input class="form-control txt-field" type="email" name="email" placeholder="Email address"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
							<input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'">
						</div>
						<div class="form-group">
							<div class="default-select" id="default-select">
								<select>
									<option value="" disabled selected hidden>From Destination</option>
									<option value="1">Destination One</option>
									<option value="2">Destination Two</option>
									<option value="3">Destination Three</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="default-select" id="default-select2">
								<select>
									<option value="" disabled selected hidden>To Destination</option>
									<option value="1">Destination One</option>
									<option value="2">Destination Two</option>
									<option value="3">Destination Three</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group dates-wrap">
								<input id="datepicker2" class="dates form-control" placeholder="Date & time" type="text">
								<div class="input-group-prepend">
									<span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
								</div>
							</div>
						</div>
						<div class="form-group">

							<button class="btn btn-default btn-lg btn-block text-center text-uppercase">Make reservation</button>

						</div>
					</form>
				</div> -->
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start Forms Area -->
<section id="reservation" class="services-area section-gap">
	<div class="container">
		<div class="row section-title">
			<h1>Formulaire de demande de réservation de ticket de bus</h1>
			<p>Reservez votre ticket de bus en toute simplicité : remplissez le formulaire de réservation de ticket dès maintenant !</p>
		</div>
	</div>
	<div class="container">
		<?php
		if (isset($_GET['success'])) {
			if ($_GET['success'] == 'true')
				echo ("<div class=\"text-center alert alert-success\" role=\"alert\">Votre demande de réservation a été envoyée avec succès !</div>");
			else if ($_GET['success'] == 'false')
				echo ("<div class=\"text-center alert alert-danger\" role=\"alert\">Erreur interne sur le serveur.<br> Votre demande de réservation n'a pas été envoyée !</div>");
		}
		?>
		<form id="alumni-request" action="traitement.php" method="post" class="needs-validation" enctype="multipart/form-data">
			<h5 class="text-danger my-2">Champs obligatoires (<span class="text-danger">*</span>)</h5>
			<div class="container">
				<h3>Informations Personnelles</h3>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="nom">Nom <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
							<div class="invalid-feedback">
								Entrez votre nom
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="prenom">Prénom <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom" required>
							<div class="invalid-feedback">
								Entrez votre prénom
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="sexe">Sexe <span class="text-danger">*</span></label>
							<select class="form-control" id="sexe" name="sexe" required>
								<option value="">Sélectionnez votre sexe</option>
								<option value="M">Masculin</option>
								<option value="F">Féminin</option>
							</select>
							<div class="invalid-feedback">
								Sélectionnez votre sexe
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="adresse">Adresse <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse" required>
							<div class="invalid-feedback">
								Entrez votre adresse
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="num">Téléphone <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="num" name="num" placeholder="Votre numéro de téléphone" required>
							<div class="invalid-feedback">
								Entrez votre numéro de téléphone
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="mail">Email <span class="text-danger">*</span></label>
							<input type="email" class="form-control" id="mail" name="mail" placeholder="Votre adresse email" required>
							<div class="invalid-feedback">
								Entrez votre adresse email
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container my-5">
				<h3>Informations de réservation</h3>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="date">Date de réservation <span class="text-danger">*</span></label>
							<input type="date" class="form-control" id="date" name="date" placeholder="Date de réservation" required>
							<div class="invalid-feedback">
								Entrez la date de réservation
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="time">Heure de réservation <span class="text-danger">*</span></label>
							<input type="time" class="form-control" id="time" name="time" placeholder="Heure de réservation">
							<div class="invalid-feedback">
								Entrez l'heure de réservation
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="depart">Point de départ <span class="text-danger">*</span></label>
							<select class="form-control" id="depart" name="depart" required>
								<option value="">Sélectionnez votre point de départ</option>
								<option value="1">Point de départ One</option>
								<option value="2">Point de départ Two</option>
								<option value="3">Point de départ Three</option>
							</select>
							<div class="invalid-feedback">
								Sélectionnez votre point de départ
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="type">Type de ticket <span class="text-danger">*</span></label>
							<select class="form-control" id="type" name="type" required>
								<option value="">Sélectionnez le type de ticket</option>
								<option value="1">Type One</option>
								<option value="2">Type Two</option>
								<option value="3">Type Three</option>
							</select>
							<div class="invalid-feedback">
								Sélectionnez le type de ticket
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="destination">Destination <span class="text-danger">*</span></label>
							<select class="form-control" id="destination" name="destination" required>
								<option value="">Sélectionnez votre destination</option>
								<option value="1">Destination One</option>
								<option value="2">Destination Two</option>
								<option value="3">Destination Three</option>
							</select>
							<div class="invalid-feedback">
								Sélectionnez votre destination
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="nombre">Nombre de place <span class="text-danger">*</span></label>
							<input type="number" class="form-control" id="nombre" name="nbre" placeholder="Nombre de place" required>
							<div class="invalid-feedback">
								Entrez le nombre de place
							</div>
						</div>
					</div>
					<!-- <div class="col-md-4">
										<div class="form-group">
												<label for="telephone">Téléphone de réservation <span class="text-danger">*</span></label>
												<input type="text" class="form-control" id="telephone" name="telephone" placeholder="Votre téléphone de réservation" required>
												<div class="invalid-feedback">
														Entrez votre téléphone de réservation
												</div>
										</div>
								</div> -->
				</div>
			</div>
			<div class="text-center"><button type="submit" class="btn btn-warning rounded-pill">Soumettre la demande</button></div>
		</form>
	</div>
</section>

<!-- Start home-about Area -->
<section class="home-about-area section-gap">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 about-left">
				<img class="img-fluid" src="assets/front/img/about-img.jpg" alt="">
			</div>
			<div class="col-lg-6 about-right">
				<h1>Globally Connected
					by Large Network</h1>
				<h4>We are here to listen from you deliver exellence</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
					eiusmod tempor.
				</p>
				<a class="text-uppercase primary-btn" href="#">Get Details</a>
			</div>
		</div>
	</div>
</section>
<!-- End home-about Area -->

<!-- Start services Area -->
<section class="services-area pb-120">
	<div class="container">
		<div class="row section-title">
			<h1>What Services we offer to our clients</h1>
			<p>Who are in extremely love with eco friendly system.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 single-service">
				<span class="lnr lnr-car"></span>
				<a href="#">
					<h4>Taxi Service</h4>
				</a>
				<p>
					Usage of the Internet is becoming more common due to rapid advancement of technology and power.
				</p>
			</div>
			<div class="col-lg-4 single-service">
				<span class="lnr lnr-briefcase"></span>
				<a href="#">
					<h4>Office Pick-ups</h4>
				</a>
				<p>
					Usage of the Internet is becoming more common due to rapid advancement of technology and power.
				</p>
			</div>
			<div class="col-lg-4 single-service">
				<span class="lnr lnr-bus"></span>
				<a href="#">
					<h4>Event Transportation</h4>
				</a>
				<p>
					Usage of the Internet is becoming more common due to rapid advancement of technology and power.
				</p>
			</div>
		</div>
	</div>
</section>
<!-- End services Area -->

<!-- Start image-gallery Area -->
<section class="image-gallery-area section-gap">
	<div class="container">
		<div class="row section-title">
			<h1>Image Gallery that we like to share</h1>
			<p>Who are in extremely love with eco friendly system.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 single-gallery">
				<a href="assets/front/img/g1.jpg" class="img-gal"><img class="img-fluid" src="assets/front/img/g1.jpg" alt=""></a>
				<a href="assets/front/img/g4.jpg" class="img-gal"><img class="img-fluid" src="assets/front/img/g4.jpg" alt=""></a>
			</div>
			<div class="col-lg-4 single-gallery">
				<a href="assets/front/img/g2.jpg" class="img-gal"><img class="img-fluid" src="assets/front/img/g2.jpg" alt=""></a>
				<a href="assets/front/img/g5.jpg" class="img-gal"><img class="img-fluid" src="assets/front/img/g5.jpg" alt=""></a>
			</div>
			<div class="col-lg-4 single-gallery">
				<a href="assets/front/img/g3.jpg" class="img-gal"><img class="img-fluid" src="assets/front/img/g3.jpg" alt=""></a>
				<a href="assets/front/img/g6.jpg" class="img-gal"><img class="img-fluid" src="assets/front/img/g6.jpg" alt=""></a>
			</div>
		</div>
	</div>
</section>
<!-- End image-gallery Area -->

<!-- Start reviews Area -->
<section class="reviews-area section-gap">
	<div class="container">
		<div class="row section-title">
			<h1>Client’s Reviews</h1>
			<p>Who are in extremely love with eco friendly system.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Cody Hines</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner,
						speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Chad Herrera</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner,
						speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Andre Gonzalez</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner,
						speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Jon Banks</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner,
						speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Landon Houston</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner,
						speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-review">
					<h4>Nelle Wade</h4>
					<p>
						Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner,
						speaker.
					</p>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End reviews Area -->

<!-- Start home-calltoaction Area -->
<section class="home-calltoaction-area relative">
	<div class="container">
		<div class="overlay overlay-bg"></div>
		<div class="row align-items-center section-gap">
			<div class="col-lg-8">
				<h1>Experience Great Support</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
				</p>
			</div>
			<div class="col-lg-4 btn-left">
				<a href="#" class="primary-btn">Reach Our Support Team</a>
			</div>
		</div>
	</div>
</section>
<!-- End home-calltoaction Area -->

<!-- Start latest-blog Area -->
<section class="latest-blog-area section-gap">
	<div class="container">
		<div class="row section-title">
			<h1>Latest News from our Blog</h1>
			<p>Who are in extremely love with eco friendly system.</p>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="single-latest-blog">
					<div class="thumb">
						<img class="img-fluid" src="assets/front/img/b1.jpg" alt="">
					</div>
					<ul class="tags">
						<li><a href="#">Travel</a></li>
						<li><a href="#">Life Style</a></li>
					</ul>
					<a href="#">
						<h4>Portable latest Fashion for young women</h4>
					</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
						dolore.
					</p>
					<p class="date">31st January, 2018</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="single-latest-blog">
					<div class="thumb">
						<img class="img-fluid" src="assets/front/img/b2.jpg" alt="">
					</div>
					<ul class="tags">
						<li><a href="#">Travel</a></li>
						<li><a href="#">Life Style</a></li>
					</ul>
					<a href="#">
						<h4>Portable latest Fashion for young women</h4>
					</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
						dolore.
					</p>
					<p class="date">31st January, 2018</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End latest-blog Area -->

<?php
// Path: home.php
include("footer.php");
?>