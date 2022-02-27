<!doctype html>
<html lang="en">
    <head>
        <title>All Guns - The Machine Gun Nest</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="all-guns-page">
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
							<div class="list-controls">
								<form class="filter-controls">
									<div class="dropdown">
										<button class="dropdown-toggle" type="button" id="gun-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gun Type</button>
										<div class="dropdown-menu" aria-labelledby="gun-type" data-filter-group data-logic="or">
											<button class="dropdown-item" type="button" data-toggle=".handgun">Hand Guns</button>
											<button class="dropdown-item" type="button" data-toggle=".longgun">Long Guns</button>
											<button class="dropdown-item" type="button" data-toggle=".fullauto">Full Auto</button>
										</div>
									</div>
									<div class="dropdown">
										<button class="dropdown-toggle" type="button" id="brand" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brand</button>
										<div class="dropdown-menu" aria-labelledby="brand" data-filter-group data-logic="or">
											<button class="dropdown-item" type="button" data-toggle=".remington">Remington</button>
											<button class="dropdown-item" type="button" data-toggle=".brand2">Brand 2</button>
											<button class="dropdown-item" type="button" data-toggle=".brand3">Brand 3</button>
										</div>
									</div>
									<div class="dropdown">
										<button class="dropdown-toggle" type="button" id="size" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Size</button>
										<div class="dropdown-menu" aria-labelledby="size" data-filter-group data-logic="or">
											<button class="dropdown-item" type="button" data-toggle=".size1">7.62 MM</button>
											<button class="dropdown-item" type="button" data-toggle=".size2">Size 2</button>
											<button class="dropdown-item" type="button" data-toggle=".size3">Size 3</button>
										</div>
									</div>
									<button type="reset" class="reset-filters">Reset</button>
								</form>
								<div class="display-types">
									<div class="display-types__grid is-visible">
										<img src="img/grid-icon-gold.svg" alt="" class="active" />
										<img src="img/grid-icon.svg" alt="" class="inactive" />
									</div>
									<div class="display-types__list is-hidden">
										<img src="img/list-icon-gold.svg" alt="" class="active" />
										<img src="img/list-icon.svg" alt="" class="inactive" />
									</div>
								</div>
								<hr />
							</div>
							<div class="rest-of-page">
								<div class="all-guns__grid-view">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun remington size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/remington-acr-thumb.png" alt="" />
												</div>
												<span>Remington ACR</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix handgun brand3 size2">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/m4-thumb.png" alt="" />
												</div>
												<span>M4</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix fullauto size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/kriss-vector-thumb.png" alt="" />
												</div>
												<span>Kriss Vector</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun brand2 size3">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/g36-thumb.png" alt="" />
												</div>
												<span>G36</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix handgun brand3 size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix fullauto remington size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun brand2 size2">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun brand3 size3">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun remington size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/remington-acr-thumb.png" alt="" />
												</div>
												<span>Remington ACR</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix handgun brand3 size2">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/m4-thumb.png" alt="" />
												</div>
												<span>M4</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix fullauto size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/kriss-vector-thumb.png" alt="" />
												</div>
												<span>Kriss Vector</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun brand2 size3">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/g36-thumb.png" alt="" />
												</div>
												<span>G36</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix handgun brand3 size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix fullauto remington size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun brand2 size2">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun brand3 size3">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun remington size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/remington-acr-thumb.png" alt="" />
												</div>
												<span>Remington ACR</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix handgun brand3 size2">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/m4-thumb.png" alt="" />
												</div>
												<span>M4</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix fullauto size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/kriss-vector-thumb.png" alt="" />
												</div>
												<span>Kriss Vector</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun brand2 size3">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/g36-thumb.png" alt="" />
												</div>
												<span>G36</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix handgun brand3 size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix fullauto remington size1">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun brand2 size2">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6 mix longgun brand3 size3">
											<a href="rentals.php#gun-details" class="gun-btn">
												<div class="gun-img">
													<img src="img/scar-17-thumb.png" alt="" />
												</div>
												<span>Scar 17</span>
											</a>
										</div>
									</div>
									<p class="filter-fail-text">There are no guns matching the selected criteria</p>
									<p class="all-guns__text">Whether you are a new shooter or an advanced shooter, we have rifles and shotguns for everyone. Shooting rifles and shotguns is a uniquely thrilling experience, much different from the experience of shooting a handgun. If you are interested in honing your shooting skills through the use of a shotgun or rifle, talk to us about the right rental for your needs. Feel free to browse the options we have above and read on to learn a little more about choosing the right gun for your rental.</p>
								</div>
								<div class="all-guns__list-view">
									<div class="row list-of-guns">
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">Allen & Thurber Single-Shot</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Al-Qadissiya Tariq</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">AMT Hardballer</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">Arsenal Firearms AF-1</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Aston Model 1842</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">Ballester-Molina</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">Belgian Pinfire</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Beretta APX</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">Beretta M9</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">Beretta Model 1915</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Beretta Model 1934</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">Beretta Model 1935</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">Beretta Model 1951</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">British Sea Service Pistol</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">Browning BDA</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">Ruger 10/22</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Savage 22</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">M&P 15-22</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">AR-15's</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Daniel Defense MK18</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">Daniel Defense M4V11 Pro</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">Daniel Defense ISR 300BLK</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Sai Gry Rifle</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">FAL .308</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">M1A National Match</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">M1 Garand</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">Sig Sauer MPX</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">CZ Scorpion</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Remington 870</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">Mossberg 500</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">F&N SLP</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Sig 716 (.308)</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">1919</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">Krinkov</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">M4 $75</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">MP5/MP5K</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">Uzi</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Thompson</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">Sten</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">Scar 16</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Scar 17</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">P90</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">G36</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix fullauto brand3 size2">
											<a href="rentals.php#gun-details.php">Kriss Vector</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix longgun remington size3">
											<a href="rentals.php#gun-details.php">Remington ACR</a>
										</div>
										<div class="col-lg-4 col-sm-6 mix handgun brand2 size1">
											<a href="rentals.php#gun-details.php">HK UMP</a>
										</div>
									</div>
									<p class="filter-fail-text">There are no guns matching the selected criteria</p>
									<p class="all-guns__text">Whether you are a new shooter or an advanced shooter, we have rifles and shotguns for everyone. Shooting rifles and shotguns is a uniquely thrilling experience, much different from the experience of shooting a handgun. If you are interested in honing your shooting skills through the use of a shotgun or rifle, talk to us about the right rental for your needs. Feel free to browse the options we have above and read on to learn a little more about choosing the right gun for your rental.</p>
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