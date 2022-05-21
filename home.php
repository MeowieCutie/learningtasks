<?php $thisPage="Index"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
</head>
     
  </div>
</div>
<body>
	<div class="h1">
	<h1>    WELCOME TO <br>
    MY PORTFOLIO</h1>
	
	
		<a class="bn39" href="index.php?mypage=profile"><span class="bn39span">Profile</span></a><br>

		<a class="bn39" href="index.php?mypage=projects"><span class="bn39span">Projects</span></a>
		
	</div>

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
			