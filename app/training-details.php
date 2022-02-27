<!doctype html>
<html lang="en">
    <head>
        <title>Maryland Concealed Carry - The Machine Gun Nest</title>
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
				<div class="video full-height">
					<div class="content">
						<div class="video__poster">
							<picture>
								<source srcset="img/training-video-poster.jpg" media="(min-width: 551px)">
								<img src="img/training-video-poster-mobile.jpg" alt="" />
							</picture>
							<button type="button" id="play-button">Play</button>
						</div>
						<div class="video__video">
							<video id="video" poster="img/training-video-poster.jpg" controls>
								<source src="media/demovideo3.mp4" type="video/mp4">
							</video>
						</div>
						<div class="page-wrapper">
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<h1>Maryland <br />concealed <br/>carry</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--<div class="training-hero">
					<div class="training-hero__img">
						<picture>
							<source srcset="img/training-video-poster.jpg" media="(min-width: 551px)">
							<img src="img/training-video-poster-mobile.jpg" alt="" />
						</picture>
					</div>
					<div class="page-wrapper">
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<h1>Maryland <br />concealed <br/>carry</h1>
							</div>
						</div>
					</div>
				</div>-->
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
							<div class="row rest-of-page">
								<div class="col-12 information-blocks">
									<div class="row">
										<div class="col-md-6 information-blocks__block">
											<div class="heading d-none d-md-block">
												<p><strong>Maryland concealed carry</strong></p>
											</div>
											<hr />
											<br class="d-none d-md-block" />
											<p>Maryland Wear & Carry Permit Class</p>
											<p class="price">$425.00</p>
											<a href="" class="btn">Enroll</a>
											<div class="gray-text experience">
												<p>Required Expirience / Education:</p>
												<ul>
													<li>no prerequisities required</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 information-blocks__block">
											<div class="heading"></div>
											<hr />
											<br class="d-none d-md-block" />
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
											<p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
											<br />
											<p><strong>Gear:</strong></p>
											<div class="row gear">
												<div class="col-lg-6 col-md-12 col-sm-4">
													<a href="" class="gun-btn">
														<img src="img/gen3-19-thumb.png" alt="" />
														<span>GEN3 19</span>
													</a>
												</div>
											</div>
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