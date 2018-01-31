<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="public/css/profil.css">
		<link rel="stylesheet" href="public/css/footer.css">
		<title>Votre Profil</title>
	</head>

	<body>
	<?php include("vues/v_header_bouton.php"); ?>
        <nav>
            <a href="index.php?target=compte&action=connecte&reaction=home" class="Onglet">Home</a>
             <?php //Affichage des onglets
                include("accueil_onglets.php");
                $onglets = afficher_onglets();
                if ($onglets!=NULL)
                foreach($onglets as $element){//On parcourt le tableau
                    ?>
                        <a href="index.php?target=compte&action=connecte&reaction=<?php echo $element; ?>" class="Onglet"> <?php echo $element; ?> </a>
                    <?php
                }
             ?>
            <div class="Vide"></div>
						<?php
						list($ID_logement,$nom,$prenom,$telephone,$adresse_mail,$date_de_naissance,$date_d_ajout) = donnees_utilisateur($_SESSION['adresse_mail_utilisateur']);
						if(isset($_GET["Mail"])){
							echo "<p class='m'>Nous venons d'envoyer un mail à ".$adresse_mail." pour le changement de votre mot de passe.<br> Surveillez votre boite de réception ainsi que vos courriers spams/indésirables !</p><br/><br/>";
						} elseif (isset($_GET["conflit"])) {
							echo "<p class='m'>L'adresse mail ".$_GET["conflit"]." est déjà présente dans notre base de donnée!</p><br/><br/>";
						}
						?>
            <a href="index.php?target=compte&action=connecte&reaction=consommation" class="Conso">Consommations</a>
            <a href="index.php?target=compte&action=connecte&reaction=profil" class="actuel">Profil</a>
		</nav>
        <section>
			<article>
				<div id="titre">Données de votre compte
				<?php
				if(isset($_GET['edition'])){
					echo '';
					if($_GET['edition']=='principal'){
						?>
				</div>
				<div id='corps'>
					<br/><!-- Titre dans le bandeau rouge-->
                        <form method='post' action='index.php?target=compte&action=connecte&reaction=profil&rempli=compte'>
                            <label for='nom'> Nom : </label>
														<span id ="missNom"></span><br>
                            <input type='text' name='nom' id='nom1' value ="<?php echo $nom;?>"required><br><br>
                            <label for='prénom'> Prénom :  </label>
														<span id ="missPrenom"></span><br>
                            <input type='text' name='prenom' id='prenom' value="<?php echo $prenom;?>" required><br><br />
                            <label for='telephone'> Téléphone :  </label>
														<span id ="missTel"></span><br>
                            <input type='text' name='telephone1' id='telephone1' maxlenght='10' value ="<?php echo $telephone;?>"required><br><br />
                            <label for='adresse_mail'> Adresse mail :  </label>
														<span id ="missMail"></span><br>
                            <input type='email' name='adresse_mail' id='adresse_mail' value ="<?php echo $adresse_mail;?>" required><br><br />
                            <label for='date_naissance'> Date de naissance:  </label><br>
                            <input type='date' name='date_naissance' id='date_naissance' value ="<?php echo $date_de_naissance;?>" required><br />
                            <br/>
														Date de création du compte :
		                        <?php
		                        echo $date_d_ajout;
		                        ?>
														<br><br>

                            <input type='submit' value='Confirmer'onclick="verification()" id='bouton'>
                    </form>
                        <br>
                        <a href ="index.php?target=compte&action=connecte&reaction=profil&mdp=<?php echo $adresse_mail;?>" onclick="alert(Vous allez recevoir un mail pour changer votre mot de passe)" class="supprimer">Modifier le mot de passe</a>
						</div>
						<?php
					} else {
						echo '';
						?>
				</div>
					<br/><!-- Titre dans le bandeau rouge-->
							<div id="corps"> <!-- Tout ce qu'il y a dans le rectangle blanc-->
								 Nom :
								<?php
								echo $nom;
								?>
								<br><br>

								Prénom :
								<?php
								echo $prenom;
								?>
								<br><br>

								Téléphone :
								<?php
								echo $telephone;
								?>
								<br><br>

								Adresse mail :
								<?php
								echo $adresse_mail;
								?>
								<br><br>

								Date de naissance :
								<?php
								echo $date_de_naissance;
								?>
								<br><br>

								Date de création du compte :
								<?php
								echo $date_d_ajout;
								?>

							</div>

						<?php
					}
				} else {
					echo '';
					?>
					<a href = "index.php?target=compte&action=connecte&reaction=profil&edition=principal" class="editer">Editer</a>
				</div>
					<br/><!-- Titre dans le bandeau rouge-->
							<div id="corps"> <!-- Tout ce qu'il y a dans le rectangle blanc-->
								 Nom :
								<?php
								echo $nom;
								?>
								<br><br>

								Prénom :
								<?php
								echo $prenom;
								?>
								<br><br>

								Téléphone :
								<?php
								echo $telephone;
								?>
								<br><br>

								Adresse mail :
								<?php
								echo $adresse_mail;
								?>
								<br><br>

								Date de naissance :
								<?php
								echo $date_de_naissance;
								?>
								<br><br>

								Date de création du compte :
								<?php
								echo $date_d_ajout;
								?>

							</div>
					<?php
				}
				?>
				</div>
                    <br/><!-- Titre dans le bandeau rouge-->
            </article>

        </section>
		<?php include("vues/v_footer.php"); ?>
			<script type='text/javascript' src='public/js/profil.js'></script>
	</body>
</html>
