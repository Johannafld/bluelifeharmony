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
    <link rel="stylesheet" href="assets/css/articles.css"/>
    <script src="assets/js/index.js"></script>
  </head>
  <body>
  <?php 
    include('./partials/header.php');
  ?>

    <main class="dashboard">
    <h2>Créer un nouvel article</h2>
        <form action="" method="POST" class="article-form">
            <label for="title">Titre de l'article:</label><br>
            <input type="text" id="title" name="title" required><br>

            <label for="content">Contenu de l'article:</label><br>
            <textarea id="content" name="content" rows="6" required></textarea><br>

            <label for="background_color">Couleur de fond:</label><br>
            <input type="color" id="background_color" name="background_color"><br>

            <button type="submit" class="create-button">Créer l'article</button>
        </form>
        <?php
    if (!empty($_POST)) {
        $title = mysqli_real_escape_string($lien, $_POST['title']);
        $content = mysqli_real_escape_string($lien, $_POST['content']);
        $background_color = mysqli_real_escape_string($lien, $_POST['background_color']);
        $creator_id = $_SESSION["user"]["id"];

        $query = "INSERT INTO articles (title, content, background_color, creator_id) VALUES ('$title', '$content', '$background_color', '$creator_id')";
        $result = mysqli_query($lien, $query);

        if ($result) {
            header("location:articles.php");
        } else {
            echo "<p style='color:red; text-align:center;'>Une erreur est survenue. Veuillez réessayer plus tard.</p>";
        }
    }
    ?>
    </main>

    <?php 
      include('./partials/footer.php');
    ?>
    
  </body>
  </html>