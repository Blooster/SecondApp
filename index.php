<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/controle.js"></script>
	<title>Champagne Charpentier Didier</title>
</head>
<body>
	<section class="container">
		<form name="form" action="accueil.php" onsubmit="return checkAgeLegal(this)">
			<div class="grosLogo">
				<img src="image/logoChampagne.png" alt="">
			</div>
			<div class="chooseLanguage">
				<p>Choisissez votre langue / Choose your language</p>
			</div>
			<div class="langue">
				<div class="french">
					<p>Français</p>
				</div>
				<div class="english">
					<p>English</p>
				</div>
			</div>
			<div class="ageLegal">
				<p class="textLegal">Pour visiter notre site, vous devez avoir l’âge légal minimum requis pour la consommation de boissons alcoolisées dans le pays dans lequel vous vous trouvez. S’il n’existe pas de législation à cet égard dans votre pays, vous devez être agé de 18 ans au moins. </p>

				<div class="certifier">
					<input type="checkbox" name="ageValide" id="ageValide">
					<p>Je certifie avoir l'âge légal pour consommer de l'alcool.</p>
				</div>
			</div>
			<div class="confirmerLegal">
				<a href="accueil.php"><input type="submit" id="boutonAgeLegal" name="boutonAgeLegal" value="Entrer"></a>
			</div>
		</form>
	</section>
</body>
</html>