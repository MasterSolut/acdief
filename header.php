<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bienvenue au portail d’ACDIEF</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="Action Collective pour le Développement Intégral de l’Enfance et de la jeune Fille " name="description">

  <!-- Favicons -->
  <link href="img/logo.jpg" rel="icon">
  <link href="img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="index.php" class="scrollto">ACDIEF</a></h1>
      </div>

      <nav id="nav-menu-container">
          <ul class="nav-menu">
              <li class="menu-active"><a href="index.php">Accueil</a></li>
              <li class="menu-has-children"><a href="" class="sf-with-ul">ACDIEF</a>
                <ul style="display: none;"> 
                  <li><a href="#about">A Propos</a></li>
                  <li><a href="#testimonials">Nos Domaines</a></li>
                  <li><a href="#services">Nos Programmes</a></li>
                </ul>
              </li>
              <li><a href="#activites">Nos Activités</a></li>
              <li><a href="#portfolio">Nos Projets</a></li> 
              <li class="menu-has-children"><a href="" class="sf-with-ul">Nos Offres</a>
                <ul style="display: none;"> 
                  <li><a href="#">Stages de perfectionnement</a></li>
                  <li class=""><a href="#">Camps de soutien scolaire</a></li> 
                </ul>
              </li>
              <li><a href="#contact">Contact</a></li>
              <li><a href=
              <?php
              
                if(isset($_SESSION["currentUser"])) {
                  echo '"account.php"';
                } else {
                  echo '"login.php"';
                }
              ?>
              >
              <?php
                if(isset($_SESSION["currentUser"])) {
                  echo 'Mon Compte';
                } else {
                  echo 'Login';
                }
              ?>
              </a></li>
          </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
