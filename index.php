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
                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
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


    <!-- Pied de page -->

</body>

</html>