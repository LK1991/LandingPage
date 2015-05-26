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

	<form method="post" id = "form">
		<div>
			<label for="name">Name: </label>
			<input type="text" name="name" />
		</div>

		<div>
			<label for="email">Email: </label>
			<input type="text" name="password" />
		</div>

		<div>
			<label for="message">Message: </label>
			<textarea rows="4" name="comment"></textarea>
		</div>

		<div>
			<button type="submit" id = "submit">Submit</button>
		</div>
	</form>
	<p>Or: </p>
	<div class="social">
    	<ul id = "social">
    	  <li title="Twitter"><a href="https://twitter.com/louis_tomlinson"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/twitter_circle_gray-64.png" alt="twitter" /></a></li>
	      <li title="Facebook"><a href="https://www.facebook.com/twentyonepilots"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_gray-64.png" alt="facebook" /></a></li>
	      <li title="Google Plus"><a href="https://plus.google.com/111200764202714440999/posts"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/google_circle_gray-64.png" alt="google +" /></a></li>
    	</ul>
  </div>
</body>
</html>

