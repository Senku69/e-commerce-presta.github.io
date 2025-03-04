<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Définition du charset et de la vue pour le responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Liens vers les fichiers CSS et bibliothèques externes -->
    <link rel="stylesheet" href="../kissJapan/css/style.css">


    <!-- Titre de la page -->
    <title>Kiss&Japan</title>
</head>

<body>
    <!-- En-tête de la page -->
    <header>
        <a href="./index.php" class="logo"><img src="../kissJapan/image/icon/Kiss japan.png" alt="kissJapan"></a>

        <nav class="navbar">
            <li><a href="./index.php">Prestations</a></li>
            <ul class="navbar-nav mx-auto">
                <!-- Megamenu-->
                <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Boutiques</a>
                    <div aria-labelledby="megamneu" class="dropdown-menu ">
                        <div class="container">
                            <div class="row bg-white rounded-0 m-0 shadow-sm">
                                <div class="col-lg-7 col-xl-8">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Catégories</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0">Yu-gi-oh</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Cardfight Vanguard</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Pokémon</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Wixoss</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Magic</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Yu-gi-oh</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Carte à Jouer</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Booster</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Deck case</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Portfolio</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Cardfight Vanguard</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Carte à Jouer</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Booster</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Deck case</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Portfolio</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Pokémon</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Carte à Jouer</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Booster</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Deck case</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Portfolio</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Wixoss</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Carte à Jouer</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Booster</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Deck case</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Portfolio</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Magic</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Carte à Jouer</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Booster</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Deck case</a></li>
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url(https://bootstrapious.com/i/snippets/sn-megamenu/mega.png)no-repeat; background-size: cover;"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <li><a href="./index.php">Contact</a></li>
            <!-- Bouton menu burger -->
            <button class="burger-menu" id="burger-menu">
                ☰
            </button>
            <script>
                document.getElementById("burger-menu").addEventListener("click", function() {
                    document.querySelector(".navbar").classList.toggle("active");
                });
            </script>

            <!-- barre de recherche -->
            <div class="search-box">
                <input type="text" class="search" placeholder="Rechercher...">
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </div>
            <a href="./profil.php"></a><img src="../kissJapan/avatar/default-avatar-profile.jpg" alt="myprofil" class="profil">
        </nav>
    </header>


    <!-- Contenu de la page -->


    <main>

        <section class="presentation">
            <div class="container">
                <h2>Bienvenue sur <span class="brand">Kiss&Japan</span></h2>
                <p>
                    Kiss&Japan est une boutique en ligne spécialisée dans la vente de cartes à jouer et de cartes à collectionner.
                </p>
                <a href="./index.php" class="btn btn-primary" aria-label="En savoir plus sur Kiss&Japan">Voir plus</a>
            </div>
        </section>
        <section class="products">
            <h2>Nos TOP Produits </h2>
            <div class="product-grid">
                <!-- Produit 1 -->
                <div class="product-card">
                    <img src="image-produit1.jpg" alt="Produit 1">
                    <h3>Produit 1</h3>
                    <p>Description du produit 1.</p>
                    <span class="price">19,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 2 -->
                <div class="product-card">
                    <img src="image-produit2.jpg" alt="Produit 2">
                    <h3>Produit 2</h3>
                    <p>Description du produit 2.</p>
                    <span class="price">24,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 3 -->
                <div class="product-card">
                    <img src="image-produit3.jpg" alt="Produit 3">
                    <h3>Produit 3</h3>
                    <p>Description du produit 3.</p>
                    <span class="price">14,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 4 -->
                <div class="product-card">
                    <img src="image-produit4.jpg" alt="Produit 4">
                    <h3>Produit 4</h3>
                    <p>Description du produit 4.</p>
                    <span class="price">29,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 5 -->
                <div class="product-card">
                    <img src="image-produit5.jpg" alt="Produit 5">
                    <h3>Produit 5</h3>
                    <p>Description du produit 5.</p>
                    <span class="price">12,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 6 -->
                <div class="product-card">
                    <img src="image-produit6.jpg" alt="Produit 6">
                    <h3>Produit 6</h3>
                    <p>Description du produit 6.</p>
                    <span class="price">22,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 7 -->
                <div class="product-card">
                    <img src="image-produit7.jpg" alt="Produit 7">
                    <h3>Produit 7</h3>
                    <p>Description du produit 7.</p>
                    <span class="price">34,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 8 -->
                <div class="product-card">
                    <img src="image-produit8.jpg" alt="Produit 8">
                    <h3>Produit 8</h3>
                    <p>Description du produit 8.</p>
                    <span class="price">9,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 9 -->
                <div class="product-card">
                    <img src="image-produit9.jpg" alt="Produit 9">
                    <h3>Produit 9</h3>
                    <p>Description du produit 9.</p>
                    <span class="price">18,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 10 -->
                <div class="product-card">
                    <img src="image-produit10.jpg" alt="Produit 10">
                    <h3>Produit 10</h3>
                    <p>Description du produit 10.</p>
                    <span class="price">27,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 11 -->
                <div class="product-card">
                    <img src="image-produit11.jpg" alt="Produit 11">
                    <h3>Produit 11</h3>
                    <p>Description du produit 11.</p>
                    <span class="price">16,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>

                <!-- Produit 12 -->
                <div class="product-card">
                    <img src="image-produit12.jpg" alt="Produit 12">
                    <h3>Produit 12</h3>
                    <p>Description du produit 12.</p>
                    <span class="price">19,99€</span>
                    <button class="btn-buy">Acheter</button>
                </div>
            </div>
        </section>
    </main>











    <!-- Pied de page -->
    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                    <h1 class="logo-text"><span>Kiss</span>&Japan</h1>
                    <p>
                        Kiss&Japan est une boutique en ligne spécialisée dans la vente de cartes à jouer et de cartes à collectionner.
                    </p>
                    <div class="contact">
                        <span><i class="fas fa-phone"></i> &nbsp; 06 40 40 40 40</span>
                        <span><i class="fas fa-adresse"></i> &nbsp; 584 rue du 19 Mars 1962</span>
                        <span><i class="fas fa-city"></i> &nbsp; Wasquehal</span>
                    </div>
                    <div class="socials">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section links">
                    <h2>Liens rapides</h2>
                    <br>
                    <ul>
                        <a href="#">
                            <li>Événements</li>
                        </a>
                        <a href="#">
                            <li>Équipe</li>
                        </a>
                        <a href="#">
                            <li>Galerie</li>
                        </a>
                        <a href="#">
                            <li>Termes et conditions</li>
                        </a>
                    </ul>
                </div>
                <div class="footer-section contact-form">
                    <h2>Contactez-nous</h2>
                    <br>
                    <form action="index.html" method="post">
                        <input type="email" name="email" class="text-input contact-input" placeholder="Votre adresse email...">
                        <textarea rows="4" name="message" class="text-input contact-input" placeholder="Votre message..."></textarea>
                        <button type="submit" class="btn btn-big contact-btn">
                            <i class="fas fa-envelope"></i>
                            Envoyer
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; Kiss&Japan | Designed by Kiss&Japan | Developped by Kiss&Japan | Tous droits réservés | Mentions légales | Politique de confidentialité
            </div>
        </div>


    </footer>

</body>

</html>