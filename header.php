<html>
<head>

<link rel="stylesheet" href="sheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="\webfontkit\stylesheet.css" type="text/css" charset="utf-8" />

<script>
    // Get the file name from the URL
    var fileName = location.pathname.split('/').pop().replace('.php', '');
    var capitalizedFileName = fileName.charAt(0).toUpperCase() + fileName.slice(1);

    // Set the title to the file name
    document.title = capitalizedFileName;
</script>
</head>

<!-- -------------------- MAIN WEBSITE CODE -------------------- -->

<body>

<center>

<div class="topblock">
<div class = "img"> <a href="index.php"> <img src="\images\logo.jpg" height="200px" width="200px"/> </a>  </div>
<center>
	<div class="h1"><h1> Welcome to YGS Computing </h1></div>
</center>

<hr>
<!-- Content under here will be in TOPBLOCK pain and automatically expand -->
<div class ="h2">
 <h2> “Our vision is for learners to become confident in the use of technology. 
	Learners strive to become proficient problem solvers who can apply their computational knowledge to real world problems. 
	Our learners will realise their potential to be creative in their use of technology and forward thinking in exploring future developments whilst considering the impact technology has on people's lives.” </h2>
</div>
<hr>
</div>

<!-- Make div containers so login form is on the far right side of the nav bar-->

<ul class="navbar">
    
    <li><a href="index.php">Home</a></li>
    <li><a href="curriculum.php">Curriculum</a></li>
    <li><a href="#">Location</a></li>
    <li><a href="acknowledgements.php">Acknowledgements</a></li>
    <li><a href="#">Feedback</a></li>

    <div class="li2">
    <li><a href="login.php">Login</a></li>
    </div>

</ul>
