<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Bienvenue</title>
    <!-- Liens CSS Bootstrap et autres dépendances -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>

body {
            font-family: 'Times New Roman', Times, serif;
        
            margin: 0;
            padding: 0;
            background-color: white;
            text-align: center;
            background-image: url(sam.jpg); /* Remplacez 'background.jpg' par le chemin de votre image */
            background-size: cover; /* Ajuste l'image pour couvrir tout l'écran */
            background-position: center; /* Centre l'image */
            /* background-repeat: no-repeat; Évite la répétition de l'image */
            background-attachment: fixed; /* Fixe l'image lorsque vous faites défiler la page */
}

.wow {
            visibility: visible;
        }

        .container-fluid1{
            background-image: url(photo11.jpeg);
            background-size: contain;
        }
        /* Animation au survol */
        .btn-square {
            width: 40px;
            height: 40px;
        }
footer .text-light {
            color: #d1d1d1;
        }

        footer .btn-square {
            background-color: #004085;
        }
        .btn-primary {
            background-color: #004085;
            border-color: #004085;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0069d9;
        }

        .footer-about {
            background-color: #004085;
        }
        header {
            background:white;
            color: black;
            padding: 10px 0;
            text-align: center;
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
        .slideshow {
            position: relative;
            max-width: 100%;
            margin: auto;
            overflow: hidden;
        }
        .slides {
            display: none;
        }
        .active {
            display: block;
        }
        .message {
            text-align: center;
            margin: 20px 0;
            font-size: 24px;
            color: #333;
        }
        .report-button:hover {
            background-color: black;
        }
        footer {
            display: flex;
            justify-content: space-between;
            padding: 38px;
            margin-top: 200px;
            background: steelblue;
            color: white;
        }
        .row{
            color: black;
        }
    </style>
</head>
<body>
      
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <img src="" alt="" style="height: 30px; margin-right: 8px;">
        MINAS
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="interface1.php">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="navbar-nav">
          <a class="nav-link" href="a propos.php">A Propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contacts</a>
        </li>
    </div>
  </nav>
  <div class="container-fluid1 bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn"></h1>
        </div>
    </div>
</div>
</div>

  <header>
    <h1>Bienvenue sur EVAS</h1>
  </header>

<div class="message">
<?php
$message = '';  // Initialisation de la variable

if (isset($_GET['message'])) {
    if ($_GET['message'] == 'success') {
        $message = '<div class="alert alert-success">Le signalement a été enregistré avec succès.</div>';
        echo $message;
    } elseif ($_GET['message'] == 'error') {
        $message = '<div class="alert alert-danger">Erreur lors du signalement.</div>';
        echo $message;
    }
}
?>
    "Signalons ensemble les enfants victimes de sévices."
</div>

<a href="interface2.php" class="btn btn-primary">Signaler un cas</a>


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
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("slides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex - 1].style.display = "block";  
        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
</script>


</body>
</html>
