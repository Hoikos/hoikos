<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="public/css/mentionslegales.css">
		<link rel="stylesheet" href="public/css/base-header-sans-bouton.css">
		<link rel="stylesheet" href="public/css/footer.css">
		
		<title>Mentions légales</title>
	</head>
	
		<body>
		<?php include("vues/v_base-header-sans-bouton-deconnexion.php"); ?>

		<nav>
			<?php 
			if (isset($_SESSION["connect"])){
				?><a href='index.php?target=compte&action=connecte&reaction=home' class='Onglet'>Retour</a><a href='index.php?target=conditions_generales' class='Grandonglet'>Conditions générales d'utilisation</a><a href='index.php?target=mentions_legales' class='actuel'>Mentions légales</a>
				<?php				
			} else {
				?>
				<a href='index.php' class='Onglet'>Retour</a><a href='index.php?target=conditions_generales' class='Grandonglet'>Conditions générales d'utilisation</a><a href='index.php?target=mentions_legales' class='actuel'>Mentions légales</a>
				<?php
			} 
			?>
		</nav>
		
		<section>

			<article>
				<div id="corps"> <!-- Tout ce qu'il y a dans le rectangle-->
					<?php 	include ("modeles/m_conditions_generales.php");
						echo afficher_mentions_legales();
					?>
				</div>			
			</article>
		</section>
		<section class="langues">
				<a href="index.php?target=mentions_legales.php" >
					<img alt="francais"  src="public/images/francais.png" id="francais">
				</a>
				<a href="mentionslegales-en.php" >
					<img alt="anglais"  src="public/images/anglais.png" id="anglais">
				</a>
		</section>
		
		<?php include("vues/v_footer.php"); ?>
		
	</body>
</html>
