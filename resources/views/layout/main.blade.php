<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GYM To Train Your Fitness and Mind</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap');

		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}

		body {
			background-color: black;
		}

		body header {
			background-color: rgb(58, 57, 57);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			border-top: 0.5rem solid #ec4141;
			/* border-bottom: 0.5rem solid #ec4141; */
		}

		nav {
			display: flex;
			height: 90px;
		}

		nav .logo {
			color: white;
			width: 40%;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 32px;
			font-weight: bolder;
			font-family: 'Quicksand', sans-serif;
		}


		nav .logo span {
			color: #ec4141;
			font-size: 32px;
			margin-left: 5px;
		}

		nav ul {
			width: 60%;
			display: flex;
			justify-content: center;
			align-items: center;


		}

		nav ul li {
			list-style: none;

		}

		nav ul li a {
			text-decoration: none;
			text-transform: uppercase;
			font-family: 'Quicksand', sans-serif;
			font-size: 14px;
			padding: 1rem 1.2rem;
			margin: 0 0.3rem;
			color: white;
		}

		nav ul li a.active {
			border-bottom: 2px solid #ec4141;
			color: #ec4141;

		}

		nav ul li a:hover {
			border-bottom: 2px solid #ec4141;
			color: #ec4141;

		}

		.header-container {
			position: relative;
			display: block;
			width: 40%;
			top: 25%;
			left: 2%;
		}

		.header-container h1 {
			color: white;
			font-size: 45px;
			text-transform: uppercase;
			font-family: 'Quicksand', sans-serif;
			letter-spacing: 2px;

		}

		.text-primary {
			color: #ec4141;

		}

		.header-container h1 .border-bottom {
			border-bottom: 2px solid #ec4141;

		}


		.btn {
			padding: 0.6rem 1.5rem;
			cursor: pointer;
			outline: none;
			border: 1.4px solid black;

		}

		.btn-primary {
			text-transform: uppercase;
			font-family: 'Quicksand', sans-serif;
			letter-spacing: 2px;
			margin-top: 2rem;
			color: white;
			background-color: #ec4141;
			border: 1.4px solid #ec4141;
			border-radius: 5px;
			font-size: 18px;
			transition: all 0.5s linear;
		}

		.btn-primary:hover {
			background-color: transparent;
		}

		h4 {
			color: white;
		}
	</style>
</head>

<body>
	<header>
		<nav>
			<div class="logo"><i class="fas fa-dumbbell"></i><span> CalBurn</span></div>
			<ul>
				<li><a href="/">Home</a> </li>
				<li><a href="/exercise">Exercises</a> </li>
				<li><a href="/nutrition">Nutrition</a></li>
				<li><a href="/healthtips">Health Tips</a></li>
				<li><a href="/userinfo"><i class="fa-solid fa-user fa-2xl"></i></a></li>
			</ul>
		</nav>
	</header>
	@yield('content')
	<!-- Remove the container if you want to extend the Footer to full width. -->
	<div class="footer">
		<!-- Footer -->
		<footer class="text-center text-lg-start text-white bg-dark">
			<!-- Grid container -->
			<div class="container p-4 pb-0">
				<!-- Section: Links -->
				<section class="">
					<!--Grid row-->
					<div class="row">
						<!-- Grid column -->
						<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
							<h6 class="text-uppercase mb-4 font-weight-bold">
							<div class="logo"><i class="fas fa-dumbbell"></i><span> CalBurn</span></div>
							</h6>
							<p>
							The harder you work and the more prepared you are for something, you’re going to be able to persevere through anything.
							</p>
						</div>
						<!-- Grid column -->

						<hr class="w-100 clearfix d-md-none" />

						<!-- Grid column -->
						<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
							<h6 class="text-uppercase mb-4 font-weight-bold">Our Services</h6>
							<p>
								<a class="text-white">Weight Loss Exercises</a>
							</p>
							<p>
								<a class="text-white">Weight Gain Exercises</a>
							</p>
							<p>
								<a class="text-white">Yoga</a>
							</p>
							<p>
								<a class="text-white">Meditation</a>
							</p>
						</div>
						<!-- Grid column -->

						<hr class="w-100 clearfix d-md-none" />

						<!-- Grid column -->
						<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
							<h6 class="text-uppercase mb-4 font-weight-bold">
								Useful links
							</h6>
							<p>
								<a class="text-white">Your Account</a>
							</p>
							<p>
								<a class="text-white">Become an Affiliate</a>
							</p>
							<p>
								<a class="text-white">Shipping Rates</a>
							</p>
							<p>
								<a class="text-white">Help</a>
							</p>
						</div>

						<!-- Grid column -->
						<hr class="w-100 clearfix d-md-none" />

						<!-- Grid column -->
						<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
							<h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
							<p><i class="fas fa-home mr-3"></i> Sundarharincha-10, Morang</p>
							<p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
							<p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
							<p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
						</div>
						<!-- Grid column -->
					</div>
					<!--Grid row-->
				</section>
				<!-- Section: Links -->

				<hr class="my-3">

				<!-- Section: Copyright -->
				<section class="p-3 pt-0">
					<div class="row d-flex align-items-center">
						<!-- Grid column -->
						<div class="col-md-7 col-lg-8 text-center text-md-start">
							<!-- Copyright -->
							<div class="p-3">
								© 2020 Copyright:
								<a class="text-white" href="https://mdbootstrap.com/">CalBurn.com</a>
							</div>
							<!-- Copyright -->
						</div>
						<!-- Grid column -->

						<!-- Grid column -->
						<div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
							<!-- Facebook -->
							<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>

							<!-- Twitter -->
							<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-twitter"></i></a>

							<!-- Google -->
							<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-google"></i></a>

							<!-- Instagram -->
							<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
						</div>
						<!-- Grid column -->
					</div>
				</section>
				<!-- Section: Copyright -->
			</div>
			<!-- Grid container -->
		</footer>
		<!-- Footer -->
	</div>
	<!-- End of .container -->
	<!-- End of .container -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>