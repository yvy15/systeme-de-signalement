<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos - Alerte Enfance</title>
    <!-- Liens CSS Bootstrap et autres dépendances -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .bg-header {
            background-image: url(photo12.jpeg); /* Remplacez par votre image d'arrière-plan */
            background-size: cover;
            background-position: center;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        nav {
            display: flex;
            background:blue;
        }
        nav a {
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            text-align: right;
        }
        nav a:hover {
            background: #555;
            
        }

        .wow {
            visibility: visible;
        }

        /* Animation au survol */
        .btn-square {
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="#" class="navbar-brand p-0">
                <h1 class="m-0"><i class=""></i>EVAS</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Accueil</a>
                    <a href="a propos.php" class="nav-item nav-link active">A propos  <span class="sr-only">(current) </span></a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>

        <!-- Header Section -->
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">À propos de nous</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">À propos de nous</h5>
                        <h1 class="mb-0">Système de signalement des enfants victimes de sévices</h1>
                    </div>
                    <p class="mb-4">Notre système a été conçu pour protéger les enfants vulnérables contre la maltraitance, la négligence, et la violence. La protection de l'enfance est une responsabilité collective et nous avons développé cette plateforme pour faciliter le signalement et l’intervention rapide.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Avantages</h5>
                            <ul>
                                <li>Coordination efficace des interventions.</li>
                                <li>Facilite la prise de décision.</li>
                                <li>Centralisation des cas de maltraitance.</li>
                                <li>Sécurité et confidentialité des données.</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Objectif</h5>
                            <p>L’objectif est de fournir une plateforme accessible aux travailleurs sociaux et à tous les acteurs impliqués dans la protection des enfants pour signaler et intervenir rapidement et efficacement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="photo9.jpeg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

  <!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="row">
            <!-- Utilisation de Bootstrap pour une grille de 4 colonnes -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="vendor-item text-center">
                    <img src="photo10.jpeg" class="img-fluid rounded" alt="Image 1" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="vendor-item text-center">
                    <img src="photo11.jpeg" class="img-fluid rounded" alt="Image 2" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="vendor-item text-center">
                    <img src="photo3.webp" class="img-fluid rounded" alt="Image 3" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="vendor-item text-center">
                    <img src="photo6.jpeg" class="img-fluid rounded" alt="Image 4" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa-duotone fa-solid fa-hands-holding-child"></i>EVAS</h1>
                        </a>
                        <p class="mt-3 mb-4">"Protéger l'enfance, c'est notre responsabilité collective".</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h3 class="text-light mb-0">Nos contacts</h3>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">MINAS-Poste Central, Yaoundé, CAMEROUN</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@minas.cm</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0"></p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="https://x.com/minasofficiel"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/minasofficiel"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.linkedin.com/company/minist%C3%A8re-des-affaires-sociales-minas"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h3 class="text-light mb-0">Nos Pages</h3>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                                <a class="text-light mb-2" href="a propos.php"><i class="bi bi-arrow-right text-primary me-2"></i>A Propos</a>
                                <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Signaler</a>
                                <a class="text-light" href="contacter.php"><i class="bi bi-arrow-right text-primary me-2"></i>Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Liens JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
