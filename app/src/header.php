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

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NBXVBN9');
	</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBXVBN9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header>
		<div class="header-inner">
			<div class="header-top-bar">
				<div class="container">
					<div class="row justify-content-center justify-content-lg-between align-items-center">
						<div class="col-9 col-md-6 col-lg-4 col-xxl-auto">
							<a href="./">
								<?= renderImg("logo.png", "logo") ?>
							</a>
						</div>
						<div class="col-12 col-lg-auto pt-4 pt-lg-0">
							<div class="row justify-content-center justify-content-lg-end no-gutters align-items-center">
								<div class="col-6 col-lg-auto pr-2 pr-lg-4">
									<a href="#form-quote" class="btn btn-block btn-secondary text-white py-3 px-md-5 fw-800 h8 d-lg-none">
										Is it an Emergency?
									</a>
									<a href="#form-quote" class="btn btn-block btn-secondary text-white py-3 py-md-4 px-md-5 fw-600 h8 d-none d-lg-block">
										Do You need <span class="fw-800">Emergency Service?</span>
									</a>
								</div>
								<div class="col-6 col-lg-auto pl-2 pl-lg-4">
									<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-primary text-black py-3 py-lg-4 px-md-5 fw-900 h8">
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
						<div class="col-12 col-lg-7 col-xxl-6">
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="trusted">
										<div class="button">TRUSTED</div>
										<div class="text-white">Real 5 Star Reviews</div>
									</div>
								</div>
								<div class="col col-md-auto pl-2 pl-md-7">
									<?= renderImg("master-electricians-member.png", "logo") ?>
								</div>
							</div>
							<div class="hero-heading text-white h1 fw-800">
								Get Friendly, Local &amp; Professional Sydney Electricians.
							</div>
							<div class="text-white h11 line-height-2 font-roboto pb-1">
								With Over 20 Years Experience, we offer a <span class="fw-900">Lifetime Workmanship Guarantee</span>.<br class="d-none d-xl-block"> We are Highly Skilled & Efficient and we care about all the details.
							</div>
							<div class="row no-gutters align-items-center pt-5">
								<div class="col-auto pr-3 pr-md-5">
									<a href="#form" class="btn btn-block btn-banner btn-primary h13">
										Get Same or Next Day Service
									</a>
								</div>
								<div class="col-auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="37.13" height="40" fill="#fff" class="bi bi-arrow-right" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center banner-testimonial-row">
						<div class="col-md-6 col-lg-4 py-2 py-lg-0">
							<div class="partner-card">
								<?= renderImg("prd.png", "logo") ?>
								<div class="title"><span class="fw-800">Caitlin Galvin Senior Property Manager</span> at PRD Oatley</div>
								<div class="description">
									“Jesse and the team at Multi Co Electrical have been a pleasure assisting our rental portfolio at PRD Oatley. When scheduling work orders, Jesse calls the tenant promptly to arrange a time. We then receive confirmation from Jesse that a time has been arranged with both the tenant and Multi Co to carry out the
								</div>
								<a href="#testimonials" class="btn btn-block btn-secondary rounded-0 text-white h20 line-height-1 py-3 fw-700">See More Testimonials</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 py-2 py-lg-0">
							<div class="partner-card">
								<?= renderImg("first-national.png", "logo") ?>
								<div class="title"><span class="fw-800">Maria Condos, Senior Property Manager</span> at First National</div>
								<div class="description">
									<p>Jesse and his team are very reliable and affordable. We have used them numerous times and I highly recommend them for small or big jobs.</p>
									<p>The work was done professionally and communication was key at all times. Services was 10/10”.</p>
								</div>
								<a href="#testimonials" class="btn btn-block btn-blue rounded-0 text-white h20 line-height-1 py-3 fw-700">See More Testimonials</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 py-2 py-lg-0">
							<div class="partner-card">
								<?= renderImg("belle.png", "logo") ?>
								<div class="title"><span class="fw-800">Caitlin Galvin Senior Property Manager</span> at PRD Oatley</div>
								<div class="description">
									<p>“Jesse and the team have always been a pleasure to deal with. His efficient, timely communication and ethical way of working has always been a pleasure to deal with.</p>
									<p>I would have no hesitations when recommending him to my family, friends and clients.”</p>
								</div>
								<a href="#testimonials" class="btn btn-block btn-green rounded-0 text-white h20 line-height-1 py-3 fw-700">See More Testimonials</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>