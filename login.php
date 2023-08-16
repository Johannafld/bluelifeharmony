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
    <title>Blue Life Harmony - Login</title>
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
    <h2>Espace perso</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Se Connecter</button>
        </form>
    </div>
    <p>N'avez-vous pas de compte? <a href="signup.php">Inscrivez-vous ici</a></p>
    <?php
    if (!empty($_POST)) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Fetch user data from the database based on the entered email
        $getUserQuery = "SELECT * FROM users WHERE email='$email'";
        $getUserResult = mysqli_query($lien, $getUserQuery);
        $user = mysqli_fetch_assoc($getUserResult);
    
        // Check if the user exists and the entered password matches the hashed password
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION["user"] = $user;
            header("location:espaceperso/index.php");
            exit();
        } else {
            echo "<p style='color:red; text-align:center;'>Login incorrecte. Vérifiez vos informations</p>";
        }
    }

echo $result['email'];
?>
</main>

<?php 
    include('./partials/footer.php');
?>
</body>
</html>

