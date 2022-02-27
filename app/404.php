<!doctype html>
<html lang="en">
    <head>
        <title>404 - The Machine Gun Nest</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="error404">
		<div data-scroll-container>
			<div class="header-navigation">
				<?php include('includes/browserupgrade.php'); ?>
				<?php include('includes/header.php'); ?>
				<?php include('includes/navigation.php'); ?>
			</div>
			<section class="section hero-section fullscreen-height dark">
				<div class="page-wrapper">
					<div class="row">
						<div class="col-md-2 about">
							<nav>
								<ul>
									<li>
										<a href="about.php">About</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-md-8">
							<div class="error-msg">
								<h2>
									<div class="line-container">
										<span>Ooops…</span>
									</div>
									<div class="line-container">
										<span>something went </span>
									</div>
									<div class="line-container">
										<span>wrong!</span>
									</div>
								</h2>
								<a href="index.php">Back</a>
							</div>
							<div class="error-img">
								<img src="img/404-gun.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php include('includes/footer.php'); ?>
		</div>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>