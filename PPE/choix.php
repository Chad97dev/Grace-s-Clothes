<!doctype html>
<html>
	<head>
		<title>PPE</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="footer3.css"media="all" 
	</head>
<body>
		<!--L'en-tête-->
		
	<?php include("entete.php");?>
	
		<!--Menu-->
		
	<?php include("menu.php");?>	

<div style="background-color:"white">
	<div id="corps">
	<h1 style="color:black; text-align:center; ">Souhaitez-vous achetez ce produit ?</h1>
	</div>
	<div id="container">
	
	
	<script type="text/javascript">
		var choix=<?php $choix=$_GET["choixs"];echo json_encode($choix); ?>;
		var container=document.getElementById("container");
		var prix=document.createTextNode('8€');
		var img=document.createElement('img');
			var div=document.createElement('div');
			div.style.padding="0px 0px 0px 150px";
		img.classList.add("imageCard");
		img.src=choix;
		img.style.width="400px";
		img.style.height="500px";
		div.appendChild(img);
		container.appendChild(div);
	</script>
	<div id="button">
	<button class="button2" type="button">Ajouter au panier</button>
	</div>
	</div>
</body>	
<br><br><br><br><br>
		<!--pied-de-page-->
	<?php include("footer.php");?>
	

</html>