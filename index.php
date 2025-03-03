<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Définition du charset et de la vue pour le responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Liens vers les fichiers CSS et bibliothèques externes -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Scripts JavaScript pour Bootstrap et FontAwesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Titre de la page -->
    <title>Kiss&Japan</title>
</head>

<body>
    <!-- En-tête de la page -->
    <header>

        <!-- Barre de navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
            <!-- logo -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="/image/icon/Kiss_japan-removebg-preview.png" alt="Logo" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- Logo ou nom du site (visible uniquement sur les petits écrans) -->
            <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none">Boutiques</a>

            <!-- Bouton pour le menu responsive (sur les petits écrans) -->
            <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenu de la barre de navigation -->
            <div id="navbarContent" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <!-- MegaMenu pour les boutiques -->
                    <li class="nav-item dropdown megamenu">
                        <a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Boutiques</a>
                        <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                            <div class="container">
                                <div class="row bg-white rounded-0 m-0 shadow-sm">
                                    <!-- Colonne de gauche : Catégories et sous-catégories -->
                                    <div class="col-lg-7 col-xl-8">
                                        <div class="p-4">
                                            <div class="row">
                                                <!-- Section Catégories -->
                                                <div class="col-lg-6 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Catégories</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Yu-gi-oh</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Cardfight Vanguard</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Pokémon</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Wixoss</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Magic</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Section Yu-gi-oh -->
                                                <div class="col-lg-6 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Yu-gi-oh</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Carte à Jouer</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Boosters</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Deck Cases</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Portfolios</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Section Cardfight Vanguard -->
                                                <div class="col-lg-6 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Cardfight Vanguard</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Carte à Jouer</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Boosters</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Deck Cases</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Portfolios</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Section Pokémon -->
                                                <div class="col-lg-6 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Pokémon</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Carte à Jouer</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Boosters</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Deck Cases</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Portfolios</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Section Wixoss -->
                                                <div class="col-lg-6 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Wixoss</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Carte à Jouer</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Boosters</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Deck Cases</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Portfolios</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Section Magic -->
                                                <div class="col-lg-6 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Magic</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Carte à Jouer</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Boosters</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Deck Cases</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link text-small pb-0">Portfolios</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Colonne de droite : Image de fond du MegaMenu (visible uniquement sur les grands écrans) -->
                                    <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url('https://bootstrapious.com/i/snippets/sn-megamenu/mega.png') no-repeat; background-size: cover;">
                                        <!-- Cette colonne contient une image de fond -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Liens supplémentaires dans la barre de navigation -->
                    <li class="nav-item"><a href="#" class="nav-link font-weight-bold text-uppercase">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link font-weight-bold text-uppercase">Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link font-weight-bold text-uppercase">Contact</a></li>
                </ul>
                <div class="search">
                    <input type="text" placeholder="Rechercher un produit" class="form-control">
                    <input type="button" value="Rechercher" class="btn btn-dark">
                </div>
            </div>
        </nav>
    </header>


    <!-- Contenu de la page -->
    <main>
        <!-- Section de présentation -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="font-weight-bold text-uppercase">Bienvenue sur Kiss&Japan</h1>
                        <p class="text-muted">Votre boutique en ligne pour les cartes à jouer et les accessoires de jeux de cartes.</p>
                        <a href="./about.php" class="btn btn-dark">Découvrir</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="/image/icon/Kiss_japan-removebg-preview.png" alt="Illustration" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- Section des produits -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="font-weight-bold text-uppercase text-center">Nos produits</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/1.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Carte à Jouer</h6>
                                <p class="text-muted small">Yu-gi-oh</p>
                                <p class="font-weight-bold">10,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">deckcase</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="/image/produit/yugioh/2.jpg" alt="Produit" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0">Boosters</h6>
                                <p class="text-muted
                                small">Yu-gi-oh</p>
                                <p class="font-weight-bold">15,00 €</p>
                                <a href="./product.php" class="btn btn-dark btn-sm">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 text-center">
                <a href="#" class="btn btn-dark">Voir plus</a>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
                        </li>
                        <li class="page-item disabled">
                        <a class="first" href=""> < First</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item disabled">
                        <a class="last" href="">Last ></a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </section>

    </main>

    <!-- Pied de page -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-uppercase font-weight-bold">Boutiques</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Yu-gi-oh</a></li>
                        <li><a href="#" class="text-white">Cardfight Vanguard</a></li>
                        <li><a href="#" class="text-white">Pokémon</a></li>
                        <li><a href="#" class="text-white">Wixoss</a></li>
                        <li><a href="#" class="text-white">Magic</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-uppercase font-weight-bold">Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Contact</a></li>
                        <li><a href="#" class="text-white">Livraison</a></li>
                        <li><a href="#" class="text-white">Retour</a></li>
                        <li><a href="#" class="text-white">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <p class="text-muted">12 rue de la République</p>
                    <p class="text-muted">75001 Paris</p>
                    <p class="text-muted">01 23 45 67 89</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-uppercase font-weight-bold">Newsletter</h6>
                    <p class="text-muted">Inscrivez-vous pour recevoir les dernières nouvelles</p>
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="email" placeholder="Entrez votre adresse e-mail" class="form-control bg-dark text-white">
                            <div class="input-group-append">
                                <input type="submit" value="S'inscrire" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>