
<?php
  //inkluderer server.php
  include("server.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>  </head>




<body>

<!-- menu-bar navigaistion Start -->


<!-- lager klasse for, men-bar, menu-icon, kallenavn min.
     Derettter linker jeg de forsjellige sider og legger til menu-icon. -->

     <nav class="menu-bar">

<div class="max-width">
<div class="nickname"> <a href="index.html">BlueAvengerZ<span>.BAZ</span></a></div>



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

<div id="box">
    <h1>Logg inn</h1>
      <form method="post"><br>
      <input type="text" name="brukernavn" placeholder="Brukernavn" id="text">
      <input type="password" name="passord" placeholder="Passord" id="psd">
      <input type="submit" name="logginn" value="Logg inn" id="button">
      <p id="txt">Har du ikke konto? <a href="registrer.php" id="button">Registrer deg</a></p>
</div>
</section>

<!-- Homepage section End -->


<!-- linker til javascript -->

<script src="scripts.js"></script>

  </body>
</html>
