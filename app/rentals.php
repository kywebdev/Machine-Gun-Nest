<!doctype html>
<html lang="en">
    <head>
        <title>Rentals - The Machine Gun Nest</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
        <style>
            #marker1-tooltip, #marker1-modal {
                top: 59%;
                left: 2%;
            }
            #marker2-tooltip, #marker2-modal {
                top: 18%;
                left: 29%;
            }
            #marker3-tooltip, #marker3-modal {
                top: 71%;
                left: 45.5%;
            }
            #marker4-tooltip, #marker4-modal {
                top: 39%;
                left: 52%;
            }
            #marker5-tooltip, #marker5-modal {
                top: 26%;
                left: 86%;
            }
		</style>
    </head>
    <body class="rentals">
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
					</div>
				</div>
				<?php include('includes/select-category.php'); ?>
				<?php include('includes/select-gun.php'); ?>
				<?php include('includes/gun-details.php'); ?>
				<div class="all-guns-mobile"></div>
			</section>
			<div class="gun-video-overlay">
				<div class="page-wrapper">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="gun-video">
								<div class="player">
									<video id="gun-video" class="video-js vjs-theme-sea vjs-16-9" controls preload="auto" poster="img/gun-detail-poster.jpg" data-setup="{}">
										<source src="media/demovideo3.mp4" type="video/mp4" />
										<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
									</video>
									<button class="video-fullscreen">
										<img src="img/full-screen-icon.svg" alt="" />
									</button>
									<button class="video-close">
										<img src="img/close-icon.svg" alt="" />
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-remodal-id="search-modal" class="search-modal">
				<form action="search-results.php">
					<label for="searchField" class="sr-only">Search for guns</label>
					<input type="search" class="form-control" id="searchField" placeholder="Search for guns">
					<button type="submit">
						<img src="img/search-lg.svg" alt="" />
					</button>
				</form>
			</div>
			<div class="modal fade marker-modal" id="marker-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<span class="modal-title" id="modal-label"></span>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<img src="img/close-icon.svg" alt="" aria-hidden="true" />
							</button>
						</div>
						<div class="modal-body">
							<p></p>
						</div>
					</div>
				</div>
			</div>
			<?php include('includes/footer.php'); ?>
		</div>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>