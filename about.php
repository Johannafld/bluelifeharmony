<?php 
    include('./scripts/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <title>Blue Life Harmony - Qui sommes-nous?</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/about.css" />
    <script src="assets/js/index.js"></script>
  </head>
  <body>
  <style>
    #audioPlayer {
      display: none; 
    }
  </style>
    <audio controls autoplay loop id="audioPlayer">
      <source src="assets/musique/date.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
  <?php 
    include('./partials/header.php');
  ?>
    <main>
      <h1 class="about-hero">Bienvenue chez Blue Life Harmony</h1>

      <section class="about-section">
        <div class="about-container">
          <h2 class="about-title">Notre histoire</h2>
          <p class="about-text">
            Chez Blue Life Harmony, nous croyons en une société inclusive où
            chaque individu est valorisé et respecté. Notre mission est de
            sensibiliser le public à l'autisme, un trouble neuro-développemental
            qui affecte la communication et les interactions sociales des
            personnes atteintes.
          </p>
          <p class="about-text">
            Notre histoire a commencé il y a plus de dix ans lorsque notre
            fondateur, John Smith, a été personnellement touché par l'autisme
            lorsqu'un membre de sa famille a été diagnostiqué. Déterminé à faire
            une différence, il a créé Blue Life Harmony dans le but d'aider les
            personnes autistes à s'épanouir et à trouver leur place dans la
            société.
          </p>
          <p class="about-text">
            Depuis lors, notre équipe dévouée travaille sans relâche pour
            promouvoir l'inclusion, l'éducation et la compréhension de
            l'autisme. Nous organisons des événements communautaires, des
            séminaires éducatifs et des programmes de sensibilisation pour
            briser les stéréotypes et les préjugés liés à l'autisme.
          </p>
          <p class="about-text">
            Nous croyons que chaque personne autiste a des talents uniques et
            des contributions précieuses à apporter à notre société. Ensemble,
            nous pouvons créer un monde où la diversité est célébrée et où tous
            les individus peuvent s'épanouir.
          </p>
        </div>
      </section>
    </main>
    <?php 
      include('./partials/footer.php');
    ?>
  </body>
</html>
