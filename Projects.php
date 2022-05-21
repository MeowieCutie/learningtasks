<?php $thisPage="Projects"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Projects</title>
	<link rel="stylesheet" href="css/projects.css">
</head>
<body>
	<div class="container">
			<div class="card"> 
				<div class="imgBx" > 
					<img { src="images/LT2.png" > 
				</div>
					<div class ="contentBx" onclick="window.open('https://geocadin-lt2.herokuapp.com/LT2/Recipes.html','mywindow');" style="cursor: pointer;">
						<div class="content">
							<h3>  Recipes  </h3>
							<p> <i>LT2</i></p>
							
						</div>	
					</div>
				</div>
			<div class="card"> 
				<div class="imgBx"> 
					<img src="images/LT3.png">
				</div>
					<div class ="contentBx" onclick="window.open('https://geocadin-lt2.herokuapp.com/LT3/index.html','mywindow');" style="cursor: pointer;">
						<div class="content">
							<h3>  My Top 10 Favorites  </h3>
							<p> <i>LT3</i></p>
					</div>
				</div>
			</div>
			<div class="card"> 
				<div class="imgBx"> 
					<img src="images/LT4.png">
				</div>
					<div class ="contentBx" onclick="window.open('https://geocadin-lt4.herokuapp.com/LT4/index.html','mywindow');" style="cursor: pointer;">
						<div class="content">
							<h3>  Poem  </h3>
							<p> <i>LT4</i></p>
					</div>
				</div>
			</div>
			<div class="card"> 
				<div class="imgBx"> 
					<img src="images/CLE1MT.png">
				</div>
					<div class ="contentBx" onclick="window.open('https://geocadin-lt2.herokuapp.com/CLE1MT/Index.html','mywindow');" style="cursor: pointer;">
						<div class="content">
							<h3>  What is Poverty  </h3>
							<p> <i>CLE1MT</i></p>
					</div>
				</div>
			</div>
	</div>
	<div class="h1">
	<h2>    Projects </h2>
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
