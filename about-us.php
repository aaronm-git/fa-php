<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>About Us</title>
	<link rel="stylesheet" href="normalize/normalize.css">
	<link rel="stylesheet" href="foundation/css/foundation.css">
	<link rel="stylesheet" href="foundation/css/app.css">
	<link rel="stylesheet" href="owl/css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl-theme.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="about-us">
	<div id="baseline-overlay"></div>
	<div id="column-overlay"></div>
	<div class="reveal large" id="video-modal" data-reveal aria-labelledby="video-modal" aria-hidden="true" role="dialog">
		<h2 id="video-modal">Time Building at Flying Academy</h2>
		<div class="responsive-embed widescreen">
			<iframe width="100%" height="600" src="https://www.youtube.com/embed/8832H4BPV1M?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<button class="close-button button" data-close aria-label="Close modal" type="button">&times;</button>
	</div>	
	<div class="wrapper">
		<?php include 'header.php' ?>
		<nav class="page-nav" style="background-image: url(images/airliner-sunset-flying.jpg); background-position: center;">
			<div class="grid-container">
				<ul class="vertical medium-horizontal menu" data-smooth-scroll>
					<li><a href="#best-section">We're the best</a></li>
					<li><a href="#mission-section">Our Mission</a></li>
					<li><a href="#experience-section">Learning From Experience</a></li>
					<li><a href="#international-section">International Students</a></li>
					<li><a href="#register-section">Register</a></li>
				</ul>
			</div>
		</nav>
		<div class="grid-container">
			<article class="grid-x grid-margin-x">
				<section class="cell medium-6 owl-carousel owl-theme uni-carousel">
					<div class="item" style="background-image: url(images/c1.jpg);">
					</div>
					<div class="item" style="background-image: url(images/c2.jpg);">
					</div>
					<div class="item" style="background-image: url(images/c3.jpg);">
					</div>
				</section>
				<section class="cell medium-6">
					<h1>EASA and FAA Approved Flight School</h1>
					<p>Flying Academy is a flight school authorized by the FAA (Federal Aviation Administration) as well as the EASA (European Aviation Safety Agency). The academy’s highest priority is to provide a safe flying environment to all its pilots. Whether at the base in Prague, Brno or Miami, Flying Academy puts its customers first, because highest customer satisfaction is one of the school’s most important values. Constant innovation keeps us ahead of the competition not only by global presence but also in technology.</p>
					<p>Flying Academy’s mission is to create professional, safety conscious flight crew members who function effectively and are thoroughly equipped for the challenges of employment opportunities as a corporate pilot or first officer and captains of airlines around the world.</p>
				</section>
			</article>
		</div>
		<div class="grid-container full check-box" id="best-section" style="background: url('images/about-plane.jpg') no-repeat bottom;">
			<div class="grid-container">
				<article class="grid-x grid-margin-x ">
					<h1 class="cell">Flying Academy Is The Best</h1>
					<section class="cell medium-6">
						<p>Flying Academy is international flight training center, approved by EASA and FAA authorities</p>
					</section>
					<section class="cell medium-6">
						<p>Financially stable business partner with sustainable double-digit growth year on year</p>
					</section>
					<section class="cell medium-6">
						<p>12 years of experience with pilot training in Europe and 30 years in the USA</p>
					</section>
					<section class="cell medium-6">
						<p>Specialized in training of future airline pilots, our area of expertise is ab-initio flight training</p>
					</section>
				</article>
			</div>
		</div>
		<div class="grid-container full quote-box">
			<div class="grid-container">
				<article class="grid-x grid-margin-x">
					<section class="cell small-12">
						<h1>Our Mission</h1>
						<blockquote>Flying Academy’s mission is to make YOU the most professional, skilled and dedicated pilot.
							We are completely equipped for the challenges of employment opportunities of airlines all over the world. Our mission is a commitment to our students based on personal approach and care, guide them step by step, close monitoring, and adapting the training.<br>This is our promise!</blockquote>
						</section>
					</article>
				</div>
			</div>
			<div class="grid-container">
				<article class="grid-x grid-margin-x plain-info" id="experience-section" style="background: url(images/about-plane2.jpg) no-repeat 0% 25%; background-size: cover;">
					<section class="cell medium-6">
						<h1>Flight Training with Experience and Innovation</h1>
						<p>Flying Academy is led by Airline Pilots. They have developed a broad range of courses that lead the students all the way to their goal. In only 2 years our students will go through PPL (Private Pilot License) to IR (Instrument Rating), then CPL (Commercial Pilot License) to finally the ATPL (Airline Transport Pilot License).</p>
					</section>
					<section class="cell medium-6">
						<div class="responsive-sprite"></div>
					</section>
				</article>
				<article class="grid-x grid-margin-x plain-info" id="international-section" style="background: url(images/waiting-background.jpg) no-repeat 0% 25%; background-size: cover;">
					<section class="cell medium-6">
						<div class="responsive-sprite"></div>
					</section>
					<section class="cell medium-6">
						<h1>International Students</h1>
						<p>Flying Academy creates a multicultural learning environment with students from all over the world. This is an opportunity for them to be surrounded by students with different cultures, it can even help them for their future career. Our school offers a lot of opportunities and gives the required support to fulfill their dreams of becoming professional and successful pilots.</p>
					</section>
				</article>
				<div class="colossal-form double-outline" id="register-section">
					<form class="grid-x grid-padding-x ">
						<h1 class="cell">Join Us Now!</h1>
						<div class="cell medium-6">
							<label for="name">Name</label>
							<input type="text" id="name" placeholder="First Name">
						</div>
						<div class="cell medium-6">
							<label for="surname">Surname</label>
							<input type="text" id="surname" placeholder="Last Name">
						</div>
						<div class="cell medium-6">
							<label for="email">Email</label>
							<input type="email" id="email" placeholder="Email">
						</div>
						<div class="cell medium-6">
							<label for="confirm-email">Confirm Email</label>
							<input type="email" id="confirm-email" placeholder="Confirm Email">
						</div>
						<div class="cell medium-6">
							<label for="phone">Phone</label>
							<input type="tel" id="phone" placeholder="Phone">
						</div>
						<div class="cell medium-6">
							<div class="form-spacer"></div>
							<input type="checkbox" id="prefered-contact-method">
							<label for="prefered-contact-method">I Prefer Phone Contact</label>
						</div>
						<div class="cell medium-6">
							<label for="country">Country of Residence</label>
							<select id="country">
								<option>Select Country</option>
							</select>
						</div>
						<div class="cell medium-6">
							<label for="type-license">Type of License</label>
							<select id="type-license">
								<option>Select License</option>
							</select>
						</div>
						<div class="cell medium-6">
							<label for="interest">Interested in...</label>
							<select id="interest">
								<option>Select Interest</option>
							</select>
						</div>
						<div class="cell medium-6">
							<div class="form-spacer"></div>
							<input type="checkbox" id="flight-experience">
							<label for="flight-experience">Previous Flight Experience</label>
						</div>
						<div class="cell">
							<label for="message">Message</label>
							<textarea id="message"></textarea>
						</div>
						<div class="cell">
							<button type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
			<?php include 'footer.php' ?>
		</div>
		<script src="jquery/jquery.min.js"></script>
		<script src="foundation/js/vendor/what-input.js"></script>
		<script src="foundation/js/vendor/foundation.js"></script>
		<script>
		$(document).foundation();
		</script>
		<script src="owl/js/owl.carousel.js"></script>
		<script>
		$(document).ready(function() {
			$('.uni-carousel').owlCarousel({
				dots: false,
				nav: true,
				autoplay: true,
				autoplayTimeout: 5000,
				loop: true,
				margin: 30,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					640: {
						items: 1
					},
					1024: {
						items: 1
					},
					1200: {
						items: 1
					},
					1440: {
						items: 1
					},
				}
			})
		})
		</script>
	</body>
	</html>
