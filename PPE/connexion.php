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
            <!-- zone de connexion -->
        <div id="border">    
            <form action=".php" method="POST">
                <h1>Connexion</h1><br>
                <label><b>Nom d'utilisateur</b></label><br>
                <br><input type="text" name="username" required><br>
                <label><b>Mot de passe</b></label><br>
                <br><input type="password" name="password" required><br>
                <br><input type="submit" id='submit' value='LOGIN' >
			</div>
            </form>
        </div>
</main>  
	
		<!--pied-de-page-->
	<?php include("footer.php");?>
</html>