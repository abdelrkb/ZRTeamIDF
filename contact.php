<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Contact - ZR Team IDF</title>
  </head>
  <body>
    <?php include('menu.php') ?>
    
    <section class="section__container contact__container">
      <div class="contact__content">
        <h2 class="section__header">Contactez-nous</h2>
        <p class="section__subheader">
          Si vous avez des questions, n'hésitez pas à nous envoyer un message !
        </p>
        <form action="submit_form.php" method="POST" class="contact__form">
          <div class="form__group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form__group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form__group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn">Envoyer</button>
        </form>
      </div>
    </section>

<?php include('footer.php') ?>
  </body>
</html>
