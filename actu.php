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
    <title>Actualités - ZR Team IDF</title>
  </head>
  <body>
    <?php include('menu.php') ?>

    <section class="section__container news__container">
      <div class="news__header">
        <h2 class="section__header">Actualités</h2>
        <p class="section__subheader">
          Découvrez les dernières nouvelles, événements et mises à jour de ZR Team IDF.
        </p>
      </div>

      <div class="news__grid">
        <article class="news__card">
          <img src="assets/news1.jpg" alt="Actualité 1" />
          <h3 class="news__title">Nouvel entraînement spécial ce samedi !</h3>
          <p>
            Rejoignez-nous pour une session spéciale d'entraînement avec notre coach invité
            qui partagera ses techniques de grappling.
          </p>
          <a href="#" class="news__link">Lire plus</a>
        </article>

        <article class="news__card">
          <img src="assets/news2.jpg" alt="Actualité 2" />
          <h3 class="news__title">Compétition régionale - Résultats</h3>
          <p>
            Bravo à nos athlètes qui ont remporté plusieurs médailles lors de la dernière
            compétition de Jiu Jitsu Brésilien en Île-de-France !
          </p>
          <a href="#" class="news__link">Lire plus</a>
        </article>

        <article class="news__card">
          <img src="assets/news3.jpg" alt="Actualité 3" />
          <h3 class="news__title">Nouvelles ceintures pour nos membres</h3>
          <p>
            Félicitations aux élèves qui ont passé leur examen et obtenu de nouvelles
            ceintures cette semaine !
          </p>
          <a href="#" class="news__link">Lire plus</a>
        </article>
      </div>
    </section>

<?php include('footer.php')?>
  </body>
</html>
