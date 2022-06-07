<footer>
	<div class="container">
		<div class="row justify-content-center justify-content-lg-between align-items-center">
			<div class="col-auto">
				<div class="row no-gutters mb-3 mb-md-0 justify-content-center align-items-center">
					<div class="col-auto pr-4 pr-xl-5"><?= renderImg("footer-logo.png","logo") ?></div>
					<div class="col-auto text-center">Copyright <?= date('Y') ?></div>
					<div class="col-auto px-2 px-md-4 text-primary">|</div>
					<div class="col-auto text-center"><?= $site ?></div>
					<div class="col-auto px-2 px-md-4 text-primary">|</div>
					<div class="col-auto text-center">All Rights Reserved
					</div>
				</div>
			</div>
			<div class="col-auto">
				<div class="row no-gutters justify-content-center justify-content-lg-end align-items-center">
					<div class="col-auto">
						<div class="row no-gutters">
							<div class="col-auto"><u>Terms &amp; Conditions</u></div>
							<div class="col-auto px-2 px-md-4 text-primary">|</div>
							<div class="col-auto"><u>Privacy Policy</u></div>
						</div>
					</div>
					<div class="col-auto pl-lg-5">
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
	<img src="<?= $img_dir ?>/icon/arrow-up.webp">
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>