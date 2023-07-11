<?php
// Path: connexion.php
include("head.php");
?>

<?php
// Path: connexion.php
include("header.php");
?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Se connecter
				</h1>
				<p class="text-white link-nav"><a href="index.html">Connexion </a> <span class="lnr lnr-arrow-right"></span> <a href="#"> Administrateur</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
	<div class="container">
		<h3 class="mb-30 text-center">Entrer vos information de connexion</h3>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<form class="form-area contact-form text-right" id="myForm" action="auth.php" method="post">
					<div class="row justify-content-center">
						<div class="col-12 col-sm-10 col-md-8 col-lg-6">
							<?php
							if (isset($error)) {
								echo "<div class=\"alert alert-danger text-center\" role=\"alert\">" . $error . "</div>";
							}
							?>
							<div class="form-group">
								<label for="name" class="float-left">Nom d'utilisateur</label>
								<input name="email" value="<?php echo $_POST['email'] ?? ''; ?>" placeholder="Entrer votre nom d'utilisateur" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre nom d\'utilisateur'" class="common-input mb-20 form-control" required type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
							</div>
							<div class="form-group">
								<label for="name" class="float-left">Mot de passe</label>
								<input name="password" value="<?php echo $_POST['password'] ?? ''; ?>" placeholder="Entrer votre mot de passe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre mot de passe'" class="common-input mb-20 form-control" required type="password">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-6 text-center">
							<button type="submit" class="genric-btn primary">Se connecter</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End contact-page Area -->

<?php
// Path: connexion.php
include("footer.php");
?>