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
			<li> <a href="tickets.php">Tickets</a> </li>
			<li> | </li>
			<li> <a href="cast.php" class="current">Cast</a> </li>
			<li> | </li>
			<li> <a href="reviews.php">Reviews</a> </li>
		</ul> <!-- end nav -->
	</nav>

	<!-- header image -->
	<?php include('includes/header.inc.php'); ?>

  <main>
		<section id="cast">
			<h2> Starring </h2>
			<div>
				<img src="images/norman-bates.jpg" alt="Anthony Perkins as Norman Bates" title="Anthony Perkins as Norman Bates" />
				<h3 class="normanquote"> "We all go a little <span class="flicker">mad</span> sometimes. Haven't you?" </h3>
				<h2> Anthony Perkins</h2>
				<p> as Norman Bates</p>
			</div>

			<div>
				<img src="images/janet-leigh-driving.jpg" alt="Janet Leigh as Marion Crane in the 1960 film Psycho" title="Janet Leigh as Marion Crane" />
				<h3 class="marionquote"> "Yes. Sometimes just one time can be enough." </h3>
				<h2> Janet Leigh</h2>
				<p> as Marion Crane</p>
			</div>
		</section>

		<h2> Supporting Cast </h2>
		<section id="supporting">
			<!-- flexbox 3 remaining supporting characters-->
			<div>
				<img src="images/lila-crane.jpg" alt="Vera Miles as Lila Crane in the 1960 film Psycho" title="Vera Miles as Lila Crane" />
				<h3> Vera Miles</h3>
				<p> as Lila Crane</p>
			</div>

			<div>
				<img src="images/sam-loomis.jpeg" alt="John Gavin as Sam Loomis in the 1960 film Psycho" title="John Gavin as Sam Loomis" />
				<h3> John Gavin</h3>
				<p> as Sam Loomis </p>
			</div>

			<div>
				<img src="images/milton-arbogast.jpeg" alt="Martin Balsam as Milton Arbogast in the 1960 film Psycho" title="Martin Balsam as Milton Arbogast" />
				<h3> Martin Balsam</h3>
				<p> as Milton Arbogast</p>
			</div>

			<div>
				<img src="images/sheriff.jpg" alt="John McIntyre as Sheriff Al Chambers in the 1960 film Psycho" title="John McIntyre as Sheriff Al Chambers" />
				<h3> John McIntyre</h3>
				<p> as Sheriff Al Chambers</p>
			</div>
		</section>
  </main>

	<!-- footer  -->
	<?php include('includes/footer.inc.php'); ?>
</body>

</html>
