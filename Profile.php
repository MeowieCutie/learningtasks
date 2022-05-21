<?php $thisPage="Profile"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
	<link rel="stylesheet" href="css/profile.css">
</head>

<body>
	<div class="h1">
	<h1>    Designer's Profile</h1>
	</div>
	<div class = "pp">
		 <img style="float: right;" src="images/Profile.jpg">
	</div>
	<div class = "contents">
		<p>Hello! My name is Rally C. Geocadin III. <br>
I am a first year student taking up Bachelor of Science in Information Technology in <br>
			The University of St. La Salle Bacolod. <br>
And this is my portfolio.</p></div>

	<div class="footer">
  <p> 
	  <?php
switch ($thisPage) {
  case "Index":
    echo "You are at the Home page";
    break;
  case "Profile":
    echo "You are at the Profile page";
    break;
  case "Projects":
    echo "You are at the Projects page";
    break;
}
?>  
		</p>
</div>
</body>
</html>