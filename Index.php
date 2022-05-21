<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CLE1EM</title>
	<link rel="stylesheet" href="css/home.css">
</head>
<div class="header">
  <div class="header-right">
	  <strong>
     <a href="index.php?mypage=index">Home</a>
    <a href="index.php?mypage=profile">Profile</a>
    <a href="index.php?mypage=projects">Projects</a>
	  </strong>
  </div>
</div>
<body>
</body>
</html>
				<?php
$mypage = $_GET['mypage'];
switch($mypage)
{
case "index":
    @include("home.php");
    break;
case "profile":
    @include("Profile.php");
    break;
case "projects":
    @include("Projects.php");
    break;
}
?>