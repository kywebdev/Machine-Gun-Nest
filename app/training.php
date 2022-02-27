<!doctype html>
<html lang="en">
    <head>
        <title>TMGN Training - The Machine Gun Nest</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="media-header title-only">
		<div data-scroll-container>
			<div class="header-navigation">
				<?php include('includes/browserupgrade.php'); ?>
				<?php include('includes/header.php'); ?>
				<?php include('includes/navigation.php'); ?>
			</div>
			<section>
				<div class="video">
					<div class="content">
						<div class="video__poster">
							<picture>
								<source srcset="img/about-video-poster.jpg" media="(min-width: 551px)">
								<img src="img/about-video-poster-mobile.jpg" alt="" />
							</picture>
							<button type="button" id="play-button">Play</button>
						</div>
						<div class="video__video">
							<video id="video" poster="img/about-video-poster.jpg" controls>
								<source src="media/demovideo3.mp4" type="video/mp4">
							</video>
						</div>
					</div>
				</div>
			</section>
			<section class="section dark">
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
							<div class="row">
								<div class="col-12">
									<h1 class="caps-offset">
										<div class="line-container">
											<span>TMGN </span>
										</div>
										<div class="line-container">
											<span>Training</span>
										</div>
									</h1>
								</div>
							</div>
							<div class="row rest-of-page">
								<div class="col-12 training-blocks">
									<div class="row">
										<div class="col-md-6 training-blocks__block">
											<a href="training-details.php">
												<div class="training-blocks__block__img">
													<img src="img/training-1.jpg" alt="" />
												</div>
												<hr />
												<p>Maryland’s required 16 hour class for obtaining a concealed carry permit.</p>
											</a>
											<a href="" class="btn training-blocks__btn">Enroll</a>
										</div>
										<div class="col-md-6 training-blocks__block">
											<a href="training-details.php">
												<div class="training-blocks__block__img">
													<img src="img/training-2.jpg" alt="" />
												</div>
												<hr />
												<p>Maryland’s required 16 hour class for obtaining a concealed carry permit.</p>
											</a>
											<a href="" class="btn training-blocks__btn">Enroll</a>
										</div>
										<div class="col-md-6 training-blocks__block">
											<a href="training-details.php">
												<div class="training-blocks__block__img">
													<img src="img/training-3.jpg" alt="" />
												</div>
												<hr />
												<p>Maryland’s required 16 hour class for obtaining a concealed carry permit.</p>
											</a>
											<a href="" class="btn training-blocks__btn">Enroll</a>
										</div>
										<div class="col-md-6 training-blocks__block">
											<a href="training-details.php">
												<div class="training-blocks__block__img">
													<img src="img/training-4.jpg" alt="" />
												</div>
												<hr />
												<p>Maryland’s required 16 hour class for obtaining a concealed carry permit.</p>
											</a>
											<a href="" class="btn training-blocks__btn">Enroll</a>
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