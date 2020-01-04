<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8"/>
<link rel="stylesheet" href="style7.css" />
 <title>Mon beau site</title>
 </head>
 <body>
		<!--L'en-tête-->
		
	<?php include("entete.php");?>
	
		<!--Menu-->
		
	<?php include("menu.php");?>	
 <div>
  <ul id="imageContainer">
  </ul>
</div>
<script type="text/javascript">
  var produit=<?php $produit=$_GET['produit']; echo json_encode($produit); ?>;
  var Haut=[];
  var Bas=[];
  var Chaussure=[];
  var Accessoires=[];
  var nouveau = [];
  var container=document.getElementById('imageContainer');
  var docFrag=document.createDocumentFragment();

  function addElementToDocFragment(imageSrc){
  var a=document.createElement('a');
   a.href="choix.php?choixs="+imageSrc;
   a.style.textDecoration="none";
   a.style.color="#808080";
   var prix=document.createTextNode('8€');
    var li=document.createElement('li');
    li.style.padding="40px";
	li.style.display="inline";
	li.style.textDecoration="none";
    var img=document.createElement('img');
    img.classList.add("imageCard");
    img.src=imageSrc;
    img.style.width="25%";
    img.style.height="25%";
	img.style.marginBottom="30px";
    a.appendChild(img);
	
    a.appendChild(prix);
    li.appendChild(a);
    docFrag.appendChild(li);
  }

  if(produit=='Haut'){
	 console.log("on est bien rentrés dans la condition Haut");
    for(var i=1; i<10; i++){
      nouveau.push("tshirt"+i+".jpg");
    }
    nouveau.forEach(function(imageName, index, originalArray){
      addElementToDocFragment("img/"+imageName);
    })
  }
    if(produit=='Bas'){
    for(var i=1; i<10; i++){
      nouveau.push("Bas"+i+".jpg");
    }
    nouveau.forEach(function(imageName, index, originalArray){
      addElementToDocFragment("img/"+imageName);
    })
  }
    if(produit=='Chaussure'){
    for(var i=1; i<10; i++){
      nouveau.push("chassure"+i+".jpg");
    }
    nouveau.forEach(function(imageName, index, originalArray){
      addElementToDocFragment("img/"+imageName);
    })
  }

    if(produit=='Accessoires'){
    for(var i=1; i<10; i++){
      nouveau.push("Accessoires"+i+".jpg");
    }
    nouveau.forEach(function(imageName, index, originalArray){
      addElementToDocFragment("img/"+imageName);
    })
  }

  container.appendChild(docFrag);
</script>


 </body>
 
 <?php include("footer.php"); ?>


</html>