<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="public/css/header_home.css">
</head>

<header>
	<a href="index.php" >
		<img alt="Logo"  src="public/images/logo.png" id="Logo"><!--Photo du logo-->
	</a>
	<br/>
	<p class = "slogan">
	<?php
	if (isset($slogan)) //Si le slogan de la bdd existe
	{ 
	echo $slogan;	
	}
	else
	{
	echo "Pour que la maison idéale soit votre maison de demain !";
	} ?>
	</p>
</header>
