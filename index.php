<?php
session_start();

// logg ut
if(isset($_GET["loggut"])) {
  session_destroy();
  header("location: logginn.php");
}
if(empty($_SESSION["id"])) {
  header("location: logginn.php");
}

 ?>

 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- linker til css filen -->

      <link rel="stylesheet" href="stil.css">

<!-- gir tittel for nettsiden min -->

  <title>Welcome to BlueAvengerZ</title>

<!-- Legger til script kode for menu-bar icon -->

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- Legger til script kode for menu-bar, menu-bar icon, skrivene tekst og teams bokser -->

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

<!-- Legger til script kode og link, for teams bokser. -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
  
<!-- menu-bar navigaistion Start -->


<!-- lager klasse for, men-bar, menu-icon, kallenavn min.
     Derettter linker jeg de forsjellige sider og legger til menu-icon. -->

   <nav class="menu-bar">

<div class="max-width">
<div class="nickname"> <a href="index.html">BlueAvengerZ<span>.BAZ</span></a></div>

  <ul class="menu">

    <li><a href="#">Home</a></li>
    <li><a href="Movie.html">Movies</a></li>
    <li><a href="Games.html">Games</a></li>
    <li><a href="Game_Story.html">Story Game</a></li>
    <li><a href="Schedule.html">Schedule</a></li>
    <li><a href="Social_media.html">Social Media</a></li>
    <li><a href="My_Projects.html">My Projects</a></li>
    <li><a href="Report.html">My Report</a></li>

  </ul>

  <div class="menu-icon">
    <i class="fas fa-bars"></i>
  </div>

</div>

</nav>

<!-- menu-bar navigaistion End -->


<!-- Homepage section Start -->


<!-- legger til seksjon, gir den en klasse.
 Etter det lager jeg forsjellige klasse for, setninger, bilder, play icon, kryss icon og video.
 Deretter legger jeg til setninger, play-icon, kryss-icon (bilde) og en video. -->


<section class="homepage">

<div class="max-width">

  <div class="text-1">Hello, my name is</div>
  <div class="text-2">Bilal Hussain</div>
  <div class="text-3">And I'm a <span class="typing"></span></div>

</div>

</section>

<!-- Homepage section End -->



    <?php echo $_SESSION["brukernavn"];?> - <?php echo $_SESSION["etternavn"]?>,
    <?php echo $_SESSION["fornavn"];?></h1>

    <p><a href="?loggut">Logg ut</a></p>
    <h1>Din profil: </h1>
    <p><b>E-post:</b> <?php echo $_SESSION["epost"]?></p>
    <p><b>Fornavn:</b> <?php echo $_SESSION["fornavn"]?></p>
    <p><b>Etternavn:</b> <?php echo $_SESSION["etternavn"]?></p>

  </body>
</html>
