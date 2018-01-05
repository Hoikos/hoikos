<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="public/css/page_utilisateur_nouvelle_salle.css">
		<link rel="stylesheet" href="public/css/base-header-avec-bouton.css">
		<link rel="stylesheet" href="public/css/footer.css">
	</head>
	<body>
		<?php include("vues/v_base-header-avec-bouton-deconnexion.php"); ?>

		<nav>
			<a href="index.php?target=compte&action=connecte&reaction=home" class="Onglet">Home</a>
	         <?php //Affichage des onglets
	            include("accueil_onglets.php");
	            $onglets = afficher_onglets();
	            foreach($onglets as $element){//On parcourt le tableau
	                    ?>
	                    <a href="index.php?target=compte&action=connecte" class="Onglet"> <?php echo $element; ?> </a>
	                    <?php
	                }
	         ?>
            <a href="index.php?target=compte&action=connecte&reaction=nouvel_onglet" class="actuel" id='nouvel_onglet'>+</a>
            <a href="index.php?target=compte&action=connecte" class="Conso">Consommations</a>
            <a href="index.php" class="Onglet">Profil</a>
        </nav>

		<section>
			<article>
				<div id="titre"> Ajouter une pièce</div><br/>
				<div id="corps">
					<form method="post" action="index.php?target=compte&action=connecte&reaction=nouvel_onglet_rempli">
						<label for='nom_salle' id=''> Nom de la nouvelle pièce : </label><br/>
	  					<input type="text" name="nom_salle" placeholder="" class="Case" size="27" required /><br/><br/>
	  					<label for="type_de_salle">Type de la nouvelle pièce :</label><br>
						<select name="type_de_salle" id="" required>
							<option value="chambre" selected >Chambre</option>
							<option value="salon">Salon</option>
							<option value="cuisine">Cuisine</option>
							<option value="salle_de_bain">Salle de bain</option>
							<option value="bibliotheque">Bibliothèque</option>
							<option value="dressing">Dressing</option>
						</select><br><br>
						<label for="superficie_salle">Superficie de la nouvelle pièce :</label><br>
						<input type="text" name="superficie_salle" placeholder="" class="Case" size="27" required /><br/><br/>
	  					
						<label for="acces">Utilisateurs secondaires autorisés à accéder aux fonctions de la pièce :</label><br>
						<select name="type_de_salle" id="" required>
							<option value="utilisateur_secondaire_1">Utilisateur secondaire 1</option>
							<option value="utilisateur_secondaire_2">Utilisateur secondaire 2</option>
						</select><br><br>
						<input type='submit' value='Valider' id='bouton'>
					</form>
				</div>
			</article>
		</section>
		<?php include("vues/v_footer.php"); ?>
	</body>
</html>