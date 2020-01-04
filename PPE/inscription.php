<!doctype html>
<html>
	<head>
		<title>PPE</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style7.css"media="all" />
	</head>
<body>
		<!--L'en-tête-->
		
	<?php include("entete.php");?>
	
		<!--Menu-->
		
	<?php include("menu.php");?>	
	
		<!--Le-corps-->
		
 <main>
			<div id="contenue">
				<form action=".php" method="post">
		<div id="border">    
	<p>		<h1> Inscription </h1>	
			<br><span class="formulaire"><b>Nom</b> <br><input type="text" name="nom_etud"/></span><br>  
			<br><span class="formulaire"><b>Prénom</b> <br> <input type="text" name="prenom_etud" /></span><br>
			<br><span class="formulaire"><b>E-mail </b><br> <input type="text" name="email" /></span></br>
			<br><span class="formulaire"><b>Mot de passe </b><br> <input type="text" name="mdp" /></span><br>
			<br><span class="formulaire"><b>Entrer le mot de passe à nouveau </b><br> <input type="text" name="mdp" /></span><br>
			 
			<br><input type="submit" value="Valider" /><br>
		</div>	
	</p>
	</form>
</div>
</main>  
	
		<!--pied-de-page-->
	<?php include("footer.php");?>
</html>