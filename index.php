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
			<li> <a href="index.php" class="current">Home</a> </li>
			<li> | </li>
			<li> <a href="tickets.php">Tickets</a> </li>
			<li> | </li>
			<li> <a href="cast.php">Cast</a> </li>
			<li> | </li>
			<li> <a href="reviews.php">Reviews</a> </li>
		</ul> <!-- end nav -->
	</nav>

	<!-- header image -->
	<?php include('includes/header.inc.php'); ?>

	<main>
		<section id="promo">
			<div>
				<h3> Greenwich Picturehouse </h3>
				<p> 180 Greeenwich High Rd, Greenwich, London SE10 8NN </p>

				<!-- tickets button -->
				<a href="tickets.php" class="ticketsbtn">Buy Tickets</a>
			</div>

			<div>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/mzx-QqweiB8"  allowfullscreen></iframe>
			</div>
		</section>

		<section id="stills">
			<h2> See it on the big screen</h2>
			<a href="tickets.php" class="ticketsbtn">Buy Tickets</a>

			<img src="images/shadowy-figure.jpg" alt="killer from the 1960s Hitchcock film Psycho" title="shadowy figure of the killer from the 1960s Hitchcock film Psycho"/>

			<h2> Relive the horror </h2>
			<a href="tickets.php" class="ticketsbtn">Buy Tickets</a>

			<img src="images/marion-screaming.jpg" alt="Marion Crane screaming in terror in the 1960s Hitchcock film Psycho" title="Marion Crane Psycho Shower Scene" class="flicker" />
		</section>

		<h2> Directed &amp; Produced by </h2>
		<section id="director">
			<div>
				<h3> Alfred Hitchcock</h3>
			</div>

			<div>
				<img src="images/hitchcock-silhouette-shadow.jpg" alt="Alfred Hitchcock director of Psycho" title="Alfred Hitchcock director of Psycho" />
			</div>
		</section>

		<section>
			<h2> One night only </h2>
			<h3> Get your tickets today </h3>
			<a href="tickets.php" class="ticketsbtn">Buy Tickets</a>
		</section>
	</main>

	<!-- footer  -->
	<?php include('includes/footer.inc.php'); ?>
</body>

</html>
