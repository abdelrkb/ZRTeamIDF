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
    <title>Planning des Cours - ZR Team IDF</title>
  </head>
  <body>
    <?php include('menu.php') ?>

    <section class="section__container planning__container">
      <div class="planning__header">
        <h2 class="section__header">Planning des Cours</h2>
        <p class="section__subheader">
          Consultez les horaires des cours pour la saison 2024-2025
        </p>
      </div>

      <h2 class="section__header"> Cours adulte</h2>
      <div class="planning__table">
        <table>
          <thead>
            <tr>
              <th>Jour</th>
              <th>Heure</th>
              <th>Discipline</th>
              <th>Lieu</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lundi</td>
              <td>19:00 - 21:00</td>
              <td>Jiu Jitsu Brésilien</td>
              <td>Collégien</td>
            </tr>
            <tr>
              <td>Mardi</td>
              <td>19:00 - 21:00</td>
              <td>Grappling</td>
              <td>Lieusaint</td>
            </tr>
            <tr>
              <td>Mercredi</td>
              <td>19:00 - 21:00</td>
              <td>Jiu Jitsu Brésilien</td>
              <td>Lieusaint</td>
            </tr>
            <tr>
              <td>Jeudi</td>
              <td>19:00 - 21:00</td>
              <td>Grappling</td>
              <td>Collégien</td>
            </tr>

            <tr>
              <td>Samedi</td>
              <td>15:00 - 17:00</td>
              <td>Jiu Jitsu Brésilien</td>
              <td>Lieusaint</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 class="section__header"> Cours enfant</h2>

      <div class="planning__table">
        <table>
          <thead>
            <tr>
              <th>Jour</th>
              <th>Heure</th>
              <th>Discipline</th>
              <th>Lieu</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Jeudi</td>
              <td>18:00 - 19:00</td>
              <td>Grappling</td>
              <td>Collégien</td>
            </tr>

            <tr>
              <td>Samedi</td>
              <td>13:00 - 15:00</td>
              <td>Jiu Jitsu Brésilien</td>
              <td>Lieusaint</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <footer class="section__container footer__container">
      <span class="bg__blur"></span>
      <span class="bg__blur footer__blur"></span>
      <div class="footer__col">
        <div class="footer__logo">
          <img src="assets/logo.png" alt="logo" />
        </div>
        <p>ZR TEAM</p>
        <div class="footer__socials">
          <a href="#"><i class="ri-facebook-fill"></i></a>
          <a href="#"><i class="ri-instagram-line"></i></a>
          <a href="#"><i class="ri-twitter-fill"></i></a>
        </div>
      </div>
    </footer>
  </body>
</html>
