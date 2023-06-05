<!DOCTYPE html>
<html>
<head>
    <title>Ma Page d'Accueil Moderne</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
    {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    color: #333;
    line-height: 1.5;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Styles de la navigation */
nav {
    background-color: #333;
    padding: 20px 0;
}

nav .logo {
    text-align: center;
    margin-bottom: 20px;
}

nav .logo img {
    max-width: 200px;
}

nav ul {
    list-style-type: none;
    display: flex;
    justify-content: center;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 5px 10px;
}

/ Styles de la section d'en-tête (hero) */
.hero {
    background-image: url('hero-bg');
}
/* Styles du carrousel */
.carousel {
    background-color: #f7f7f7;
    padding: 40px 0;
}

.carousel-container {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}

.carousel-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel-slide img {
    max-width: 100%;
    height: auto;
    margin: 0 10px;
}

/* Styles de la section de fonctionnalités (features) /
.features {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 50px;
}

.feature {
    width: 30%;
    background-color: #fff;
    padding: 30px;
    margin-bottom: 20px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.feature img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.feature h2 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
}

.feature p {
    font-size: 16px;
    color: #666;
}

/* Styles du pied de page (footer) */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}
</style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Bienvenue sur notre site moderne</h1>
            <p>Découvrez nos services de qualité</p>
            <a href="#" class="btn">En savoir plus</a>
        </div>
    </section>

    <section class="carousel">
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="carousel1.jpg" alt="Image 1">
                <img src="carousel2.jpg" alt="Image 2">
                <img src="carousel3.jpg" alt="Image 3">
            </div>
        </div>
    </section>

    <section class="features">
        <div class="feature">
            <img src="feature1.jpg" alt="Feature 1">
            <h2>Service 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="feature">
            <img src="feature2.jpg" alt="Feature 2">
            <h2>Service 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="feature">
            <img src="feature3.jpg" alt="Feature 3">
            <h2>Service 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </section>

    <footer>
        <p>Tous droits réservés &copy; 2023</p>
    </footer>
</body>
</html>