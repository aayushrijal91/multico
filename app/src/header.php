<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script>
</head>

<body>
	<header>
		<div class="header-inner">
			<div class="header-top-bar">
				<div class="container">
					<div class="row justify-content-center justify-content-lg-between align-items-center">
						<div class="col-auto">
							<a href="./">
								<?= renderImg("logo.png", "logo") ?>
							</a>
						</div>
						<div class="col-auto">
							<div class="row justify-content-center justify-content-lg-end no-gutters align-items-center">
								<div class="col-12 col-md-auto pr-4">
									<a href="#form-quote" class="btn btn-block btn-secondary text-white py-4 px-md-5 fw-600 h8">
										Do You need <span class="fw-800">Emergency Service?</span>
									</a>
								</div>
								<div class="col-12 col-md-auto pl-4">
									<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-primary text-black py-4 px-md-5 fw-900 h8">
										<?= $phone_number ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 col-xl-6">
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="trusted">
										<div class="button">TRUSTED</div>
										<div class="text-white">Real 5 Star Reviews</div>
									</div>
								</div>
								<div class="col-auto pl-7">
									<?= renderImg("master-electricians-member.png", "logo") ?>
								</div>
							</div>
							<div class="hero-heading text-white h1 fw-800">
								Get Friendly, Local &amp; Professional Sydney Electricians.
							</div>
							<div class="text-white h11 line-height-2 font-roboto">
								With Over 20 Years Experience, we offer a <span class="fw-900">Lifetime Workmanship Guarantee</span>.<br> We are Highly Skilled & Efficient and we care about all the details.
							</div>
							<div class="row no-gutters">
								<div class="col-auto">
									<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-primary text-black py-4 px-md-5 fw-900 h8">
										<?= $phone_number ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>