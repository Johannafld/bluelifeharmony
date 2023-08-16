<?php 
    session_start();
    include('./scripts/config.php');

    // Check user is already logged in, redirect to dashboard
    if (isset($_SESSION["user"])) {
        header("location:espaceperso/index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../assets/img/logo.png" />
    <title>Blue Life Harmony - Inscription</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <script src="assets/js/index.js"></script>
</head>
<body>
    <?php 
    include('./partials/header.php');
    ?>
    <main class="login-page">
        <div class="login-container">
            <h2>Inscription</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">S'inscrire</button>
            </form>
        </div>
        <p>Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
    </main>
  <?php
    if (!empty($_POST)) {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      // Check if email already exists in the database
      $emailCheckQuery = "SELECT * FROM users WHERE email='$email'";
      $emailCheckResult = mysqli_query($lien, $emailCheckQuery);
      if (mysqli_num_rows($emailCheckResult) > 0) {
          echo "<p style='color:red; text-align:center;'>Email already exists. Please use a different email.</p>";
      } else {
          // Hash the password using bcrypt
          $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
          // insert user in database
          $insertUserQuery = "INSERT INTO users (prenom, nom, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashedPassword')";
          $result = mysqli_query($lien, $insertUserQuery);

          if ($result) {
              // login user
              $loginQuery = "SELECT * FROM users WHERE email='$email' AND password='$hashedPassword'";
              $loginResult = mysqli_query($lien, $loginQuery);
              $user = mysqli_fetch_assoc($loginResult);

              if ($user) {
                  $_SESSION["user"] = $user;
                  header("location:espaceperso/index.php");
                  exit();
              }
          } else {
              echo "<p style='color:red; text-align:center;'>Une erreur est survenue. Veuillez réessayer plus tard.</p>";
          }
      }
    }
  ?>

    <?php 
    include('./partials/footer.php');
    ?>
</body>
</html>
