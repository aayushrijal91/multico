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
								<?= renderImg("logo.png","logo") ?>
							</a>
						</div>
						<div class="col-auto">
							<div class="row justify-content-center justify-content-lg-end no-gutters align-items-center">
								<div class="col-12 col-md-auto pr-4">
									<a href="#form-quote" class="btn btn-block btn-secondary text-white py-3 px-md-5">
										Do You need <span class="fw-800">Emergency Service?</span>
									</a>
								</div>
								<div class="col-12 col-md-auto pl-4">
									<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-primary text-black py-3 px-md-5">
										<?= $phone_number ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner"></div>
		</div>
	</header>