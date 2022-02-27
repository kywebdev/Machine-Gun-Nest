<!doctype html>
<html lang="en">
    <head>
        <title>Blog - The Machine Gun Nest</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="blog">
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
						<div class="col-md-8">
							<div class="row">
								<div class="col-12">
									<h1>
										<div class="line-container">
											<span>Explore </span>
										</div>
										<div class="line-container">
											<span>our articles</span>
										</div>
									</h1>
									<div class="blog-blurb">
										<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth. We do it all - firearm sales, accessories, training, and a live fire indoor range. One of our most important goals though is to inform you. Furthering your education should be taken seriously, and we're here to help you do so.</p>
									</div>
									<h1 class="articles-num">
										<div class="line-container">
											<span>45</span>
										</div>
									</h1>
								</div>
							</div>
							<div class="list-controls">
								<form class="filter-controls filter-controls-parent">
									<div class="dropdown">
										<button class="dropdown-toggle" type="button" id="long-guns" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Long Guns</button>
										<div class="dropdown-menu" aria-labelledby="long-guns" data-filter-group data-logic="or">
											<button class="dropdown-item" type="button" data-toggle=".opt1">Option 1</button>
											<button class="dropdown-item" type="button" data-toggle=".opt2">Option 2</button>
											<button class="dropdown-item" type="button" data-toggle=".opt3">Option 3</button>
										</div>
									</div>
									<div class="dropdown">
										<button class="dropdown-toggle" type="button" id="remington" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Remington</button>
										<div class="dropdown-menu" aria-labelledby="remington" data-filter-group data-logic="or">
											<button class="dropdown-item" type="button" data-toggle=".opt4">Option 4</button>
											<button class="dropdown-item" type="button" data-toggle=".opt5">Option 5</button>
											<button class="dropdown-item" type="button" data-toggle=".opt6">Option 6</button>
										</div>
									</div>
									<!--<div class="dropdown">
										<button class="dropdown-toggle" type="button" id="range" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Range</button>
										<div class="dropdown-menu" aria-labelledby="range" data-filter-group data-logic="or">
											<button class="dropdown-item" type="button" data-toggle=".opt7">Option 7</button>
											<button class="dropdown-item" type="button" data-toggle=".opt8">Option 8</button>
											<button class="dropdown-item" type="button" data-toggle=".opt9">Option 9</button>
										</div>
									</div>
									<div class="dropdown">
										<button class="dropdown-toggle" type="button" id="categories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</button>
										<div class="dropdown-menu" aria-labelledby="categories" data-filter-group data-logic="or">
											<button class="dropdown-item" type="button" data-toggle=".opt10">Option 10</button>
											<button class="dropdown-item" type="button" data-toggle=".opt11">Option 11</button>
											<button class="dropdown-item" type="button" data-toggle=".opt12">Option 12</button>
										</div>
									</div>-->
								</form>
								<div class="display-types">
									<!--<div class="list-controls">
										<form class="filter-controls">
											<div class="dropdown">
												<button class="dropdown-toggle" type="button" id="article-count" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">24</button>
												<div class="dropdown-menu" aria-labelledby="article-count" data-filter-group data-logic="or">
													<button class="dropdown-item" type="button" data-toggle=".opt13">Option 13</button>
													<button class="dropdown-item" type="button" data-toggle=".opt14">Option 14</button>
													<button class="dropdown-item" type="button" data-toggle=".opt15">Option 15</button>
												</div>
											</div>
										</form>
									</div>-->
									<div>
										<div class="display-types__list is-visible">
											<img src="img/list-icon-gold.svg" alt="" class="active" />
											<img src="img/list-icon.svg" alt="" class="inactive" />
										</div>
										<div class="display-types__grid is-hidden">
											<img src="img/grid-icon-gold.svg" alt="" class="active" />
											<img src="img/grid-icon.svg" alt="" class="inactive" />
										</div>
									</div>
								</div>
								<hr />
							</div>
							<div class="rest-of-page">
								<div class="blog-articles list-view">
									<div class="row">
										<article class="col-12 blog-articles__article mix opt1">
											<div class="row">
												<div class="col-lg-6">
													<div class="blog-articles__article__img">
														<a href="blog-details.php">
															<img src="img/article-1-thumb-list-desktop.jpg" alt="" />
														</a>
													</div>
												</div>
												<div class="col-lg-6 blog-articles__article__info">
													<div>
														<div class="blog-articles__article__categories">
															<ul>
																<li>
																	<a href="">News</a>
																</li>
																<li>
																	<a href="">Remington</a>
																</li>
																<li>
																	<a href="">Longguns</a>
																</li>
															</ul>
														</div>
														<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
														<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth. We do it all - firearm sales, accessories, training, and a live fire indoor range. One of our most important goals though is to inform you. Furthering your education should be taken seriously, and we're here to help you do so.</p>
													</div>
													<a href="" class="blog-articles__article__date-posted">30 August 2020</a>
												</div>
												<div class="col-12">
													<hr />
												</div>
											</div>
										</article>
										<article class="col-12 blog-articles__article mix opt2">
											<div class="row">
												<div class="col-lg-6">
													<div class="blog-articles__article__img">
														<a href="blog-details.php">
															<img src="img/article-2-thumb-list-desktop.jpg" alt="" />
														</a>
													</div>
												</div>
												<div class="col-lg-6 blog-articles__article__info">
													<div>
														<div class="blog-articles__article__categories">
															<ul>
																<li>
																	<a href="">News</a>
																</li>
															</ul>
														</div>
														<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
														<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth. We do it all - firearm sales, accessories, training, and a live fire indoor range. One of our most important goals though is to inform you. Furthering your education should be taken seriously, and we're here to help you do so.</p>
													</div>
													<a href="" class="blog-articles__article__date-posted">30 August 2020</a>
												</div>
												<div class="col-12">
													<hr />
												</div>
											</div>
										</article>
										<article class="col-12 blog-articles__article mix opt3">
											<div class="row">
												<div class="col-lg-6">
													<div class="blog-articles__article__img">
														<a href="blog-details.php">
															<img src="img/article-3-thumb-list-desktop.jpg" alt="" />
														</a>
													</div>
												</div>
												<div class="col-lg-6 blog-articles__article__info">
													<div>
														<div class="blog-articles__article__categories">
															<ul>
																<li>
																	<a href="">News</a>
																</li>
															</ul>
														</div>
														<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
														<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth. We do it all - firearm sales, accessories, training, and a live fire indoor range. One of our most important goals though is to inform you. Furthering your education should be taken seriously, and we're here to help you do so.</p>
													</div>
													<a href="" class="blog-articles__article__date-posted">30 August 2020</a>
												</div>
												<div class="col-12">
													<hr />
												</div>
											</div>
										</article>
										<article class="col-12 blog-articles__article mix opt4">
											<div class="row">
												<div class="col-lg-6">
													<div class="blog-articles__article__img blog-articles__article__img--video">
														<a href="blog-details-video.php">
															<img src="img/article-4-video-poster-list.jpg" alt="" />
															<button type="button" class="play-button">Play</button>
														</a>
													</div>
												</div>
												<div class="col-lg-6 blog-articles__article__info">
													<div>
														<div class="blog-articles__article__categories">
															<ul>
																<li>
																	<a href="">News</a>
																</li>
																<li>
																	<a href="">Remington</a>
																</li>
																<li>
																	<a href="">Longguns</a>
																</li>
															</ul>
														</div>
														<h2><a href="blog-details-video.php">What do I need to bring with me to the range?</a></h2>
														<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth. We do it all - firearm sales, accessories, training, and a live fire indoor range. One of our most important goals though is to inform you. Furthering your education should be taken seriously, and we're here to help you do so.</p>
													</div>
													<a href="" class="blog-articles__article__date-posted">30 August 2020</a>
												</div>
												<div class="col-12">
													<hr />
												</div>
											</div>
										</article>
										<article class="col-12 blog-articles__article mix opt5">
											<div class="row">
												<div class="col-lg-6">
													<div class="blog-articles__article__img">
														<a href="blog-details.php">
															<img src="img/article-5-thumb-list-desktop.jpg" alt="" />
														</a>
													</div>
												</div>
												<div class="col-lg-6 blog-articles__article__info">
													<div>
														<div class="blog-articles__article__categories">
															<ul>
																<li>
																	<a href="">News</a>
																</li>
															</ul>
														</div>
														<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
														<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth. We do it all - firearm sales, accessories, training, and a live fire indoor range. One of our most important goals though is to inform you. Furthering your education should be taken seriously, and we're here to help you do so.</p>
													</div>
													<a href="" class="blog-articles__article__date-posted">30 August 2020</a>
												</div>
												<div class="col-12">
													<hr />
												</div>
											</div>
										</article>
										<article class="col-12 blog-articles__article mix opt6">
											<div class="row">
												<div class="col-lg-6">
													<div class="blog-articles__article__img">
														<a href="blog-details.php">
															<img src="img/article-6-thumb-list-desktop.jpg" alt="" />
														</a>
													</div>
												</div>
												<div class="col-lg-6 blog-articles__article__info">
													<div>
														<div class="blog-articles__article__categories">
															<ul>
																<li>
																	<a href="">News</a>
																</li>
															</ul>
														</div>
														<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
														<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth. We do it all - firearm sales, accessories, training, and a live fire indoor range. One of our most important goals though is to inform you. Furthering your education should be taken seriously, and we're here to help you do so.</p>
													</div>
													<a href="" class="blog-articles__article__date-posted">30 August 2020</a>
												</div>
												<div class="col-12">
													<hr />
												</div>
											</div>
										</article>
									</div>
									<p class="filter-fail-text">There are no articles matching the selected criteria</p>
									<div class="row">
										<div class="col-12 show-more text-center">
											<a href="#" class="btn">Show More</a>
										</div>
									</div>
								</div>
								<div class="blog-articles grid-view">
									<div class="row">
										<article class="col-12 blog-articles__article mix opt1">
											<div class="row">
												<div class="col-lg-7">
													<div class="blog-articles__article__img">
														<a href="blog-details.php">
															<picture>
																<source srcset="img/article-1-thumb-mobile.jpg" media="(max-width:550px)" />
																<img src="img/article-1-thumb-desktop.jpg" alt="" />
															</picture>
														</a>
													</div>
												</div>
												<div class="col-lg-5">
													<div>
														<div class="blog-articles__article__categories">
															<ul>
																<li>
																	<a href="">News</a>
																</li>
																<li>
																	<a href="">Remington</a>
																</li>
																<li>
																	<a href="">Longguns</a>
																</li>
															</ul>
														</div>
														<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
														<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth. We do it all - firearm sales, accessories, training, and a live fire indoor range. One of our most important goals though is to inform you. Furthering your education should be taken seriously, and we're here to help you do so.</p>
													</div>
													<a href="blog-details.php" class="arrow-btn">
														<img src="img/arrow-btn.svg" alt="" />
													</a>
												</div>
											</div>
										</article>
										<article class="col-lg-7 blog-articles__article mix opt2">
											<div>
												<div class="blog-articles__article__categories">
													<ul>
														<li>
															<a href="">News</a>
														</li>
														<li>
															<a href="">Longguns</a>
														</li>
													</ul>
												</div>
												<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
												<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth. We do it all - firearm sales, accessories, training, and a live fire indoor range.</p>
											</div>
											<div class="blog-articles__article__img">
												<a href="blog-details.php">
													<picture>
														<source srcset="img/article-2-thumb-mobile.jpg" media="(max-width:550px)" />
														<img src="img/article-2-thumb-desktop.jpg" alt="" />
													</picture>
												</a>
											</div>
										</article>
										<div class="col-lg-5">
											<article class="blog-articles__article mix opt3">
												<div class="blog-articles__article__img">
													<a href="blog-details.php">
														<picture>
															<source srcset="img/article-3-thumb-mobile.jpg" media="(max-width:550px)" />
															<img src="img/article-3-thumb-desktop.jpg" alt="" />
														</picture>
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
											<article class="blog-articles__article mix opt4">
												<div class="blog-articles__article__img mb-0">
													<a href="blog-details-video.php">
														<img src="img/article-4-video-poster.jpg" alt="" />
														<button type="button" class="play-button">Play</button>
													</a>
												</div>
											</article>
										</div>
										<div class="col-12">
											<div class="row blog-slider">
												<div class="col-lg-4 slide mix opt5">
													<article class="blog-articles__article">
														<div class="blog-articles__article__img">
															<a href="blog-details.php">
																<img src="img/article-5-thumb-desktop.jpg" alt="" />
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
												<div class="col-lg-4 slide mix opt6">
													<article class="blog-articles__article">
														<div class="blog-articles__article__img">
															<a href="blog-details.php">
																<img src="img/article-6-thumb-desktop.jpg" alt="" />
															</a>
														</div>
														<div class="blog-articles__article__categories">
															<ul>
																<li>
																	<a href="">News</a>
																</li>
																<li>
																	<a href="">Longguns</a>
																</li>
															</ul>
														</div>
														<h2><a href="blog-details.php">What do I need to bring with me to the range?</a></h2>
														<p>The Crew at TMGN comes together from a wide background of Civilian, LEO and Military Members. We bring a lot to the table and so do you. We are here to help provide you an excellent experience whether it's your first time seeing a firearm, or your hundredth.</p>
													</article>
												</div>
												<div class="col-lg-4 slide mix opt7">
													<article class="blog-articles__article">
														<div class="blog-articles__article__img">
															<a href="blog-details.php">
																<img src="img/article-7-thumb-desktop.jpg" alt="" />
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
												<div class="col-lg-4 slide mix opt8">
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
												<div class="col-lg-4 slide mix opt9">
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
												<div class="col-lg-4 slide mix opt10">
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
									<p class="filter-fail-text">There are no articles matching the selected criteria</p>
									<div class="row">
										<div class="col-12 show-more text-center">
											<a href="#" class="btn">Show More</a>
										</div>
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