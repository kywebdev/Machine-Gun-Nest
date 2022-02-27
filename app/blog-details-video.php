<!doctype html>
<html lang="en">
    <head>
        <title>Blog Details (Video) - The Machine Gun Nest</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="blog-details">
		<div data-scroll-container>
			<div class="header-navigation">
				<?php include('includes/browserupgrade.php'); ?>
				<?php include('includes/header.php'); ?>
				<?php include('includes/navigation.php'); ?>
			</div>
			<section class="section hero-section dark">
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
						<div class="col-12 hero-image">
							
						</div>
						<div class="col-md-8 offset-md-2">
							<div class="row">
								<div class="col-12">
									<div class="hero-heading">
										<h1>TMGN Training Video</h1>
										<div class="dropdown">
											<button class="dropdown-toggle" type="button" id="share-article" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/share.svg" alt="" /></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="share-article">
												<button class="dropdown-item" type="button">Facebook</button>
												<button class="dropdown-item" type="button">Twitter</button>
												<button class="dropdown-item" type="button">LinkedIn</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="rest-of-page">
					<article>
						<div class="page-wrapper">
							<div class="row">
								<div class="col-md-8 offset-md-2">
									<hr />
									<div class="article-meta">
										<div>
											<a href="" class="article-meta__posted-by">Admin</a>
											<a href="" class="article-meta__post-date">04 December 2020</a>
										</div>
										<hr />
										<div class="article-meta__categories">
											<ul>
												<li>
													<a href="">Remington</a>
												</li>
												<li>
													<a href="">Longguns</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="article-body">
										<div class="video">
											<div class="content">
												<div class="video__poster">
													<img src="img/training-video-poster-16x9.jpg" alt="" />
													<button type="button" class="play-button">Play</button>
												</div>
												<div class="video__video">
													<video id="video" poster="img/training-video-poster-16x9.jpg" controls>
														<source src="media/demovideo3.mp4" type="video/mp4">
													</video>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<div class="page-wrapper">
						<div class="row">
							<div class="col-md-8 offset-md-2 related-articles">
								<h3>You may also like</h3>
								<hr />
								<div class="row blog-slider">
									<div class="col-lg-4 slide">
										<article class="blog-articles__article">
											<div class="blog-articles__article__img">
												<a href="blog-details.php">
													<img src="img/article-8-thumb-desktop.jpg" alt="" />
												</a>
											</div>
											<div class="blog-articles__article__categories">
												<ul>
													<li>
														<a href="">News</a>
													</li>
												</ul>
											</div>
											<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
											<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth.</p>
										</article>
									</div>
									<div class="col-lg-4 slide">
										<article class="blog-articles__article">
											<div class="blog-articles__article__img">
												<a href="blog-details.php">
													<img src="img/article-9-thumb-desktop.jpg" alt="" />
												</a>
											</div>
											<div class="blog-articles__article__categories">
												<ul>
													<li>
														<a href="">News</a>
													</li>
												</ul>
											</div>
											<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
											<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth.</p>
										</article>
									</div>
									<div class="col-lg-4 slide">
										<article class="blog-articles__article">
											<div class="blog-articles__article__img">
												<a href="blog-details.php">
													<img src="img/article-10-thumb-desktop.jpg" alt="" />
												</a>
											</div>
											<div class="blog-articles__article__categories">
												<ul>
													<li>
														<a href="">News</a>
													</li>
												</ul>
											</div>
											<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
											<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth.</p>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div data-remodal-id="search-modal" class="search-modal">
				<form action="search-results.php">
					<label for="searchField" class="sr-only">Search articles</label>
					<input type="search" class="form-control" id="searchField" placeholder="Search articles">
					<button type="submit">
						<img src="img/search-lg.svg" alt="" />
					</button>
				</form>
			</div>
			<?php include('includes/footer.php'); ?>
		</div>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>