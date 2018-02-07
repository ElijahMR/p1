<?php include('quotes.php'); ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Elijah Reddy Project 1</title>

    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="flex-container">
	<div>
		<h1>Elijah Reddy</h1>
		<img src="images/image.jpg" alt="This is supposed to be a picture." />
		<p>I'm camera shy so you get a picture I took of some cherry blossoms instead.</p>
	</div>
	<div>
		<h2>About Me</h2>
		<p>I am a freelance developer providing solutions primarily for cryptocurrency related projects while pursuing a degree in computer science from the Harvard Extension School. After dabbling in front-end web development, Windows/MacOS Qt programs, Android/iOS app creation and contributing to a few web app projects I am looking to become a full stack web developer in order to grow my skill set. This course looked like a perfect introduction and so here I am.</p>
	</div>
	<div>
		<h2>Random Quote</h2>
		<blockquote cite="https://www.goodreads.com/quotes/tag/humor">
			<p><?php echo $quotes[rand(0,5)] ?></p>
		</blockquote>
	</div>
</div>
</body>
</html>