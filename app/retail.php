<!doctype html>
<html lang="en">
    <head>
        <title>Retail - The Machine Gun Nest</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="retail">
		<div data-scroll-container>
			<div class="header-navigation">
				<?php include('includes/browserupgrade.php'); ?>
				<?php include('includes/header.php'); ?>
				<?php include('includes/navigation.php'); ?>
			</div>
			<section class="section hero-section fullscreen-height dark">
				<div class="offset-text">
					<h1>
						<div class="line-container">
							<span>The </span>
						</div>
						<div class="line-container">
							<span>machine gun </span>
						</div>
						<div class="line-container">
							<span>nest</span>
						</div>
					</h1>
				</div>
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
						<div class="col-md-8 retail-blocks">
							<div class="row">
								<div class="col-lg-4 col-sm-6">
									<div class="retail-block">
										<span class="retail-block__num">01</span>
										<div>
											<h2>Sales & Transfers</h2>
											<p>“All applicable Federal, State and Local magazine capacity restrictions and compliant firearm model rules apply.”</p>
											<a href="sales.php" class="btn">View More</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="retail-block">
										<span class="retail-block__num">02</span>
										<div>
											<h2>Blue Label Sales</h2>
											<p>“All applicable Federal, State and Local magazine capacity restrictions and compliant firearm model rules apply.”</p>
											<a href="glock-blue.php" class="btn">View More</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="retail-block">
										<span class="retail-block__num">03</span>
										<div>
											<h2>America Guardian Program</h2>
											<p>“All applicable Federal, State and Local magazine capacity restrictions and compliant firearm model rules apply.”</p>
											<a href="sw-guardian.php" class="btn">View More</a>
										</div>
									</div>
								</div>
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