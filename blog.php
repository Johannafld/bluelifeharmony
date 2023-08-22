<?php
include('./scripts/config.php');

// Fetch articles from the database
$articlesQuery = "SELECT title, content, background_color FROM articles";
$articlesResult = mysqli_query($lien, $articlesQuery);
$articles = mysqli_fetch_all($articlesResult, MYSQLI_ASSOC);

$backgroundImages = [
  'https://images.unsplash.com/photo-1526739178209-77cd6c6bcf4f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2792&q=80',
  'https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80',
  'https://scontent.fcdg4-1.fna.fbcdn.net/v/t31.18172-8/26172134_1489413351167153_6182747604602238646_o.jpg?_nc_cat=107&ccb=1-7&_nc_sid=4dc865&_nc_ohc=5jHnJJx96ZkAX_aUJtk&_nc_ht=scontent.fcdg4-1.fna&oh=00_AfCdM5EBdwPpS9SJ3vUUnLQOhglBh6mL7s56z_3YEDX18Q&oe=64FADEB8',
  'https://www.cfa-espace-concours.fr/wp-content/uploads/2023/03/journee-mondiale-sensibilisation-autisme-scaled.jpg'
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <title>Blue Life Harmony - Blog</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/blog.css">
</head>
<body>
  <?php 
    include('./partials/header.php');
  ?>

<main>

  <div class="center-content">
      <h2>Découvrir nos articles</h2>
      <?php if (count($articles) > 0): ?>
   
      <div class="slider-container">
        <div class="left-slide">
        <?php foreach ($articles as $article): ?>
            <div style="background-color: <?php echo $article['background_color']; ?>">
              <h1><?php echo $article['title']; ?></h1>
              <p><?php echo $article['content']; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="right-slide">
        <?php foreach ($articles as $article): ?>
                  <div style="background-image: url('<?php echo $backgroundImages[array_rand($backgroundImages)]; ?>')"></div>
        <?php endforeach; ?>
        </div>
        <div class="action-buttons">
          <button class="down-button">
            <i class="fas fa-arrow-down"></i>
          </button>
          <button class="up-button">
            <i class="fas fa-arrow-up"></i>
          </button>
        </div>
      </div>
      <?php else: ?>
        <p>Aucun article disponible pour le moment.</p>
      <?php endif; ?>

  </div>

</main>

<?php 
      include('./partials/footer.php');
?>

<script src="assets/js/index.js"></script>

</body>
</html>