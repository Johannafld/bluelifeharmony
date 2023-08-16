<?php 
session_start();
include('../scripts/config.php');

if (!isset($_SESSION["user"])) {
    header("location:login.php");
}

// Fetch articles for the logged-in user
$userId = $_SESSION["user"]["id"];
$query = "SELECT * FROM articles WHERE creator_id = '$userId'";
$result = mysqli_query($lien, $query);
$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Delete article logic
if (isset($_POST['delete_article_id'])) {
  $deleteId = $_POST['delete_article_id'];
  $deleteQuery = "DELETE FROM articles WHERE id = '$deleteId'";
  $deleteResult = mysqli_query($lien, $deleteQuery);
  if ($deleteResult) {
      // Refresh the page after deleting
      header("location:articles.php");
  }
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
        <div class="dashboard-title">
            <h2>Mes Articles</h2>
            <a href="create_article.php" class="create-article-link">Créer un article</a>
        </div>
    
        <div class="article-list">
            <?php foreach ($articles as $article): ?>
                <div class="article-card">
                    <p><?= $article["title"] ?></p>
                    <form method="POST" class="delete-form">
                        <input type="hidden" name="delete_article_id" value="<?= $article['id'] ?>">
                        <button type="submit" class="delete-button">Supprimer</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php 
      include('./partials/footer.php');
    ?>
    
  </body>
  </html>