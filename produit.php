<?php
if(isset($_GET['produit'])){ //Securité : produit dans la bar de recherche
	$produit = $_GET['produit'];
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>auptitpatisse</title>
	<link rel="stylesheet" href="media/css/style.css">
</head>
<body>
<header>
		<a href="./" class="icon"><img src="./media/images/Image.png" alt="auptitpatisse LOGO"></a>
		<input type="checkbox" id="hamburger-menu">
		<nav>
			<a href="./"><span>Acceuil</span><span class="hover"></span></a>
			<a href="./menu.html" class="current"><span>La Carte</span><span class="hover"></span></a>
			<a href="./traiteur.html"><span>Service traiteur</span><span class="hover"></span></a>
		</nav>
		<label for="hamburger-menu" class="hamburger"><span></span></label>
</header>
	<main>

	</main>
</body>

</html>