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
    <link rel="stylesheet" href="assets/css/profile.css"/>
    <script src="assets/js/index.js"></script>
  </head>
  <body>
  <?php 
    include('./partials/header.php');
  ?>

  <main class="dashboard">
        <h2>Mon Profil</h2>
        <div class="profile-info">
            <ul class="user-details">
                <li><strong>Prénom:</strong> <?php echo ucfirst($_SESSION["user"]["prenom"]) ?></li>
                <li><strong>Nom:</strong> <?php echo ucfirst($_SESSION["user"]["nom"]) ?></li>
            </ul>
        </div>
    </main>

    <?php 
      include('./partials/footer.php');
    ?>
    
  </body>
  </html>