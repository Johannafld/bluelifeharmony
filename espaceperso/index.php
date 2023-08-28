<?php 
session_start();
include('../scripts/config.php');

if (!isset($_SESSION["user"])) {
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <title>Espace Perso - Blue Life Harmony</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/dashboard.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <script src="assets/js/index.js"></script>
  </head>
  <body>
  <?php 
    include('./partials/header.php');
  ?>

    <main class="dashboard">
    <div class="content">
      <h2>Espace Perso - Vue d'ensemble</h2>
      <p> <strong> Bienvenue dans votre Espace Personnel : Un Havre d'Information pour l'Autisme </strong> 🌟 <br> <br>

Cher explorateur du savoir et de la compassion,<br>

C'est avec une chaleur immense que nous vous accueillons dans cet espace unique, un endroit dédié à l'éclairage et à l'enrichissement des vies touchées par l'autisme.<br> Ici, chaque clic et chaque mot peuvent changer des vies, y compris la vôtre.<br>

Imaginez un lieu où la connaissance devient une bouée d'espoir, où chaque article que vous créez est une graine d'inspiration pour les cœurs et les esprits qui cherchent la vérité.<br> Dans cette enclave en ligne, vous avez le pouvoir de transformer des vies, de façonner des perceptions et de créer un monde plus compréhensif.<br>

Rejoignez-nous dans la mission de l'éducation, de l'émancipation et de l'unité. <br> Vous avez la possibilité de partager vos histoires édifiantes, des astuces qui changent la donne, et des ressources éducatives qui illuminent le chemin. Votre contribution, qu'elle soit grande ou petite, peut être le pivot sur lequel les récits changent et les cœurs s'ouvrent.<br>

Avec vos mots, nous pouvons dissoudre les idées fausses, libérer le potentiel caché et tisser des liens d'entraide.<br>Vous êtes un bâtisseur de ponts entre les mondes, un créateur de compréhension et un porteur d'espoir.<br>

Naviguez dans les fonctionnalités de cet Espace Personnel, inspirez-vous des possibles et élevez vos articles vers les cieux de la signification.<br> Chaque publication est une goutte de sagesse qui épanouit la conscience.<br>

Engagez-vous dans ce voyage avec nous. Ensemble, nous sommes une source d'éclat qui brille dans l'obscurité de l'inconnu. Ensemble, nous créons une toile d'information et de bienveillance qui rayonne à travers l'horizon.<br>

Merci d'apporter votre lumière unique à cette cause noble. Le monde en ligne vous accueille à bras ouverts.<br>

Avec gratitude,<br>
<span class="team-name">L'Équipe de Blue Life Harmony</span> 🌈

</p>
    </div>
   
    </main>

    <?php 
      include('./partials/footer.php');
    ?>
  </body>
  </html>