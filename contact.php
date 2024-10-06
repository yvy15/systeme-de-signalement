<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <!-- Liens CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Liens pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Styles personnalisés -->
    <style>
        /* Ajout de styles pour personnaliser les composants */
        .bg-header {
            background: linear-gradient(135deg, #0062cc, #004085);
            background-size: cover;
            background-position: center;
            color: white;
        }
        nav {
            display: flex;
            background:blue;
        }
        body {
            font-family: 'Times New Roman', Times, serif;
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
        
        .navbar-brand h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        .navbar .nav-item .nav-link {
            color: #fff !important;
            padding: 15px;
        }

        .navbar .nav-item .nav-link:hover {
            background-color: #004085;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-primary {
            background-color: #004085;
            border-color: #004085;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0069d9;
        }

        .section-title h1 {
            font-size: 2.5rem;
            font-weight: 700;
            text-transform: capitalize;
            color: #343a40;
        }

        .container-fluid.bg-primary {
            padding: 50px 0;
            background-image: url(photo13.jpg);
        }

        footer .text-light {
            color: #d1d1d1;
        }

        footer .btn-square {
            background-color: #004085;
        }

        .footer-about {
            background-color: #004085;
        }

        .back-to-top {
            background-color: #004085;
            border-color: #004085;
        }

        .back-to-top:hover {
            background-color: #0069d9;
            border-color: #0069d9;
        }

        /* Animation pour les icônes et transitions */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .wow {
            animation: fadeIn 1s ease-in-out;
        }

        /* Styles pour la modale de recherche */
        .modal-content {
            border-radius: 10px;
        }
        
        input.form-control {
            border-radius: 10px;
            font-size: 1rem;
        }

        button.btn-search {
            border-radius: 0 10px 10px 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
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
                    <a href="interface1.html" class="nav-item nav-link">Accueil</a>
                    <a href="a propos.html" class="nav-item nav-link">A propos</a>
                    <a href="contact.html" class="nav-item nav-link active">Contact  <span class="sr-only">(current)</span></a>
                </div>
        </nav>
    </div>

    <!-- Header Section -->
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Nos contacts</h1>
            </div>
        </div>
    </div>

    <!-- Contact Information Section -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Nos contacts</h5>
                <h1 class="mb-0">Pour toutes questions contactez-nous!</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Numéro à contacter</h5>
                            <h4 class="text-primary mb-0"></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email du MINAS</h5>
                            <h4 class="text-primary mb-0">info@minas.cm</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Localisation</h5>
                            <h4 class="text-primary mb-0">MINAS-Poste Centrale, Yaoundé, Cameroun</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="#" class="navbar-brand">
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

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- JavaScript, jQuery et Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script pour le bouton retour en haut -->
    <script>
        $(document).ready(function () {
            // Afficher le bouton après le défilement
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });

            // Action sur le bouton
            $('.back-to-top').click(function () {
                $('html, body').animate({ scrollTop: 0 }, 800);
                return false;
            });
        });
    </script>
</body>

</html>
