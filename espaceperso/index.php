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
      <p>Bienvenue sur votre espace personnel. Vous pouvez accéder à vos informations, gérer vos paramètres et bien plus encore.</p>
    </div>
   
    </main>

    <?php 
      include('./partials/footer.php');
    ?>
  </body>
  </html>