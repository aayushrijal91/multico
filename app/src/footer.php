<footer>
	<div class="container">
		<div class="row justify-content-center justify-content-md-between justify-content-lg-center justify-content-xl-between align-items-center">
			<div class="col-12 col-xl-auto">
				<div class="row no-gutters mb-3 mb-md-0 justify-content-center justify-content-lg-between align-items-center">
					<div class="py-2 py-md-0 col-5 col-md-12 col-lg-auto pr-4 pr-xl-5 text-center pb-md-4 pb-lg-0"><?= renderImg("footer-logo.png", "logo") ?></div>
					<div class="py-2 py-md-0 col-auto text-center">Copyright <?= date('Y') ?></div>
					<div class="py-2 py-md-0 col-auto px-2 px-md-4 text-primary">|</div>
					<div class="py-2 py-md-0 col-auto text-center"><?= $site ?></div>
					<div class="py-2 py-md-0 col-auto px-2 px-md-4 text-primary">|</div>
					<div class="py-2 py-md-0 col-auto text-center">All Rights Reserved
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-auto pt-md-4 pt-xl-0">
				<div class="row no-gutters justify-content-center justify-content-xl-end align-items-center">
					<div class="col-12 col-md-auto">
						<div class="row no-gutters justify-content-center">
							<div class="col-auto"><u>Terms &amp; Conditions</u></div>
							<div class="col-auto px-2 px-md-4 text-primary">|</div>
							<div class="col-auto"><u>Privacy Policy</u></div>
						</div>
					</div>
					<div class="col-auto pt-5 pt-md-0 pl-md-5">
						<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
							<?= renderImg("aiims.png", "logo") ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>