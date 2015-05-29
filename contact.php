<?php
	require_once(__DIR__ . "/model/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css2/contact.css">
	<link rel="stylesheet" href="AvantGardeMdITC-Bold.css" type="text/css" charset="utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Fira+Sans:500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css'>
</head>
<header>
		<div class = "nav">
				<ul>
					<a href="index.php">Home</a>
					<a href="projects.php">Projects</a>
					<a href="contact.php">Contact</a>
				</ul>
		</div>
</header>
<body>
	<h1>Email Me</h1>

	<form method="post" id = "form" action="<?php echo $path . "controller/create-post.php"; ?>">
		<div>
			<label for="name">Name: </label>
			<input type="text" name="name" />
		</div>

		<div>
			<label for="email">Email: </label>
			<input type="text" name="email" />
		</div>

		<div>
			<label for="message">Message: </label>
			<textarea rows="4" name="post"></textarea>
		</div>

		<div>
			<button type="submit" id = "submit">Submit</button>
		</div>
	</form>
	<p>Or: </p>
	<div class="social">
    	<ul id = "social">
    	  <li title="Twitter"><a href="https://twitter.com/Louis_Tomlinson"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_gray-64.png" alt="twitter" /></a></li>
	      <li title="Facebook"><a href="https://www.facebook.com/twentyonepilots"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_gray-64.png" alt="facebook" /></a></li>
	      <li title="Github"><a href="https://github.com/LK1991"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/github_circle_gray-64.png" alt="github" /></a></li>
    	</ul>
  </div>
</body>
</html>

