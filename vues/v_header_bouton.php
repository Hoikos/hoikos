<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="public/css/header_bouton.css">
</head>

<header>

	<a href="index.php" class= "logoslogan">
		<img alt="Logo"  src="public/images/logo.png" id="Logo"><!--Photo du logo-->
	<br/>
	<span class = "slogan">
	<?php
	if (isset($_SESSION['slogan'])) //Si le slogan de la bdd existe
	{ 
	echo $_SESSION['slogan'];	
	}
	else
	{
	echo "Pour que la maison idéale soit votre maison de demain !";
	} ?>
	</span>
	</a>
	<img alt="Maisons"  src="public/images/petitesmaisons.png" id="Maisons">

	<span class="nom_compte">
  	<?php 
  	if (isset($_SESSION["prenom_utilisateur"]))
  	{
  		echo $_SESSION["prenom_utilisateur"]; 
  	}
  	?>
 	<a href="index.php?target=deconnexion" class="deconnex">Déconnexion</a>
 	</span>

</header>
