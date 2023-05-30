<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mon Portfolio</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<h1>Mon Portfolio</h1>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="profil.php">Profil</a></li>
                <li><a href="mailto:natsu04499@gmail.com">Contact</a></li>

			</ul>
		</nav>
	</header>
	<main>
		<div class="hero">
			<h2>Bienvenue sur mon Portfolio</h2>
			<p>Vous retrouverez ici toutes mes réalisations professionnelles et personnelles dans le développement informatique.</p>
			<!-- <a class="btn" href="profil.php">En savoir plus</a> -->
		</div>
		<div class="about">
			<h3>À propos de moi</h3>
			<p>Je m'appelle Rayan j'ai 20 ans, je suis passionné d'informatique, développeur en alternance j'aime approfondir mes connaissances en développement.</p>
			<a class="btn" href="profil.php">Voir mon profil</a>
		</div>
		<div class="projects">
			<center><h3>Mes projets</h3></center>
            <br>
			<div class="grid">
                <div class="project">
                    <div class="project-img">
                        <img src="image/campus.png" alt="projet 1">
                    </div>
                    <div class="project-content">
                        <h4>Campus Riera</h4>
                        <p>Page d'accueil de Campus Riera qui est un centre de formation sur Nice, sur ce site vous retrouverez les différentes formations proposées, un extranet, des dossiers d'inscription etc... Ce projet a été réalisé dans le cadre de mon alternance.</p>
                        <a class="btn" href="https://campus-riera.com">Voir le projet</a>
                    </div>
                </div>
                <br>
                <div class="project">
                    <div class="project-img">
                        <img src="image/magnan.png" alt="projet 2">
                    </div>
                    <div class="project-content">
                        <h4>Magnan Imo</h4>
                        <p>Ceci est un site d'agence immobilière réalisé en Laravel dans le cadre de ma formation au BTS SIO.</p>
                        <a class="btn" href="https://github.com/Natsu04499/MAGNAN-IMO">Voir le projet</a>
                    </div>
                </div>
    			<div class="project">
                    <div class="project-img">
                        <img src="image/stock.png" alt="projet 3">
                    </div>
                    <div class="project-content">
                        <h4>Stock My Geek</h4>
                        <p>Ceci est l'une de mes premières réalisations durant les années de BTS, il permet de se connecter à un site de vente d'objets Geek.</p>
                        <a class="btn" href="https://github.com/Natsu04499/StockMyGeek">Voir le projet</a>
                    </div>
                </div>
			 </div>
		</div>
	</main>
	<footer>
		<p>© 2023 Mon Portfolio</p>
	</footer>
</body>
</html>