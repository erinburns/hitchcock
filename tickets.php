<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Alfred Hitchcock's Psycho (1960) | Psycho</title>
  	<link rel="stylesheet" href="style/reset.css" type="text/css">  <!-- CSS reset -->
  	<link rel="stylesheet" href="style/style.css" type="text/css"> <!--  page styles -->
	<!-- link to web fonts  -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Eczar%7CCabin+Sketch%7CAmatic+SC%7COpen+Sans+Condensed:300">
  <!-- responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <nav>
		<ul>  <!-- start nav -->
			<li> <a href="index.php">Home</a> </li>
			<li> | </li>
			<li> <a href="tickets.php" class="current">Tickets</a> </li>
			<li> | </li>
			<li> <a href="cast.php">Cast</a> </li>
			<li> | </li>
			<li> <a href="reviews.php">Reviews</a> </li>
		</ul> <!-- end nav -->
	</nav>

	<!-- header image -->
	<?php include('includes/header.inc.php'); ?>

  <main>
		<div>
			<h3> Greenwich Picturehouse </h3>
			<p> 180 Greeenwich High Rd, Greenwich, London SE10 8NN </p>
			<!-- tickets button -->
			<div id="showtimes">
				<a href="#" class="ticketsbtn">8:00 PM</a>
				<a href="#" class="ticketsbtn">9:45 PM</a>
				<a href="#" class="ticketsbtn">10:30 PM</a>
				<a href="#" class="ticketsbtn">Midnight</a>
			</div>
		</div>

		<section id="rules">
				<img src="images/late-arrivals-psycho.jpg" alt="Hitchcock's late arrivals policy poster" title="Hitchcock's late arrivals policy poster" />

				<div>
					<h2> Watch Psycho the way Hitchcock intended </h2>
					<p> The manager of this theatre has been instructed, at the risk of his life, not to admit to the theatre any persons after the picture starts. </p>
					<p> Any spurious attempts to enter by side doors, fire escapes, or ventilating shafts will be met by force. The entire objective of this extraordinary policy, of course, is to help you enjoy Psycho more. </p>
					<p> - The Management</p>
				</div>
		</section>

		<div id="map">  <!-- add css filter -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.8351100672885!2d-0.011919849152152301!3d51.47954087953068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876028606c5ee49%3A0xc30a050deb4e042f!2sGreenwich+Picturehouse!5e0!3m2!1sen!2suk!4v1490388925027" width="600" height="450" style="border:0" allowfullscreen></iframe>
		</div>
  </main>

	<!-- footer include -->
	<?php include('includes/footer.inc.php'); ?>
</body>

</html>
