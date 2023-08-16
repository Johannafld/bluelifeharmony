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
    <title>Blue Life Harmony - Contact</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/contact.css" />
    <script src="assets/js/index.js"></script>
  </head>
  <body>
  <?php 
    include('./partials/header.php');
  ?>
    <main>
      <section class="contact-section">
        <div class="contact-container">
          <h2 class="contact-title">Contactez-nous</h2>
          <p class="contact-text">
            Vous avez des questions, des commentaires ou des suggestions? Nous
            aimerions avoir de vos nouvelles. Remplissez le formulaire
            ci-dessous et nous vous répondrons dans les plus brefs délais.
          </p>
          <form class="contact-form" action="#" method="post">
            <div class="form-group">
              <label for="name">Nom</label>
              <input
                type="text"
                id="name"
                name="name"
                placeholder="Votre nom"
                required
              />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Votre email"
                required
              />
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea
                id="message"
                name="message"
                rows="6"
                placeholder="Votre message"
                required
              ></textarea>
            </div>
            <div class="form-group">
              <button type="submit">Envoyer</button>
            </div>
          </form>
        </div>
      </section>
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Set up the email headers
        $to = 'support@bluelifeharmony.com';
        $subject = 'Contactfrom Blue Life Harmony';
        $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Send the email
        $mailSent = mail($to, $subject, $message, $headers);

        // Check if the email was sent successfully
        if ($mailSent) {
            echo "<p style='color:green; text-align:center;'>Merci! Votre message a bien été envoyé.</p>";
        } else {
            echo "<p style='color:red; text-align:center;'>Oops! Une erreur est survenue. Veuillez réessayer plus tard.</p>";
        }
    }
      ?>
    </main>
    <?php 
      include('./partials/footer.php');
    ?>
  </body>
</html>
