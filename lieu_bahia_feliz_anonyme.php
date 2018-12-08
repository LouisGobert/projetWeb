<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>BAHIA FELIZ | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/header.inc.php'; ?>

      <h1 class="position">Bahia Feliz</h1>

      <main>
        <section class="conteneur_presen_sport">
          <article class="sport_detail" id="detail_lieu">
            <h2>Bahia Feliz,</h2><p>Situé sur l'île Gran Canaria, qui fait partie des îles Canaries, Bahia Feliz est un très bon choix de destination. Il se situe entre Las Palmas et Le Roque Nublo, qui est le point le plus haut de l'île. Vous pourrez ainsi faire du jogging sur les plages ou alors du trail ou de la randonnée dans les montagnes.</p>
          </article>
          <article class="adresse_lieu" id="infos_bahia">
            <h2>Adresse</h2>
              <p>San Bartolomé de Tirajana 9</p>
              <p>Grand Cannarie, Las Palmas</p>
              <p>Espagne <img src="images/flag/spain-flag-icon-16.png" alt="Drapeau de l'Espagne"></p>
              <p>Lattitude : 27.78085</p>
              <p>Longitude : -15.520694</p>
          </article>
          <article class="infos_lieus">
            <h2>Sport et événement à ce lieux</h2>
              <h3><a href="sport_trail_bahia_membre.php" title="Trail"><i class="fas fa-running"></i></a>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <a class="button_sport" href="sport_trail_bahia_membre.php" title="Visualiser en detail ce sport">Trail</a>
              </h3>
              <h3><a href="sport_randonee_bahia_membre.php" title="Randonnée"><i class="fas fa-hiking"></i></a>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star"></i>
                <a class="button_sport" href="sport_randonee_bahia_membre.php" title="Visualiser en detail ce sport">Randonnée</a>
              </h3>
              <h3>Transgrancanaria
                <a class="button_sport" href="evenement_transgrandcannaria.php" title="Voir cet événement">Voir la page</a>
              </h3>
          </article>
          <article id="map_bahia">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d189851.25527681547!2d-15.70361823429055!3d27.849952176401285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xc409df4ff0005dd%3A0xba3a3001bab4c5c!2sUnnamed+Road%2C+35107+San+Bartolom%C3%A9+de+Tirajana%2C+Las+Palmas%2C+Espagne!3m2!1d27.788840399999998!2d-15.522015!5e0!3m2!1sfr!2sbe!4v1542992776268" width="850" height="450" style="border:0" allowfullscreen></iframe>
          </article>
        
          <section class="barre_galerie">
            <h2>Galerie</h2>
          </section>

          <article class="sport_image">
            <img src="images/sport/trail_3.jpg" alt="Image de trail">
          </article>
          <article class="sport_image">
            <img src="images/sport/bahia_feliz_1.jpg" alt="Image de trail">
          </article>
          <article class="sport_image">
            <img src="images/sport/trail_1.jpg" alt="Image de trail">
          </article>
          <article class="sport_image">
            <img src="images/sport/trail_2.jpg" alt="Image de trail">
          </article>
          <a class="afficher_plus_sport" href="#" title="Afficher plus de photo sur ce lieu">Afficher plus de photos</a>

          <section class="barre_galerie">
            <h2>Commentaire</h2>
          </section>

          <article class="commentaire_lieu">
            <p><strong>Moi </strong><a title="Supprimer se commentaire"><i class="fas fa-trash-alt"></i></a> : Je n'y suis jamais allé!!</p><br>
            <p><strong>Aline</strong> : Ca a l'air beau.</p><br>

            <p><strong>Moi </strong><a title="Supprimer se commentaire"><i class="fas fa-trash-alt"></i></a> : Je n'y suis jamais allé!!</p><br>

            <p><strong>Arnaud </strong> : Combien ca coute exactement ? Et combien de fois peux t'on le faire en une journée ?<br>Merci de vos réponse.</p><br>

            <p><strong>Moi </strong><a title="Supprimer se commentaire"><i class="fas fa-trash-alt"></i></a> : Je n'y suis jamais allé!!</p><br>

            <p><strong>Antoine</strong> : On peux faire du VTT ?</p>
            <form class="ajouter_commentaire">
              <input type="text" name="commentaire" placeholder="Commenter..." title="Ajouter votre propre commentaire">
            </form>
          </article>

          <article class="nb_vue">Cette page a été visionnée 362 fois</article>
        </section>
      </main>

      <?php require 'inc/footer.inc.php'; ?>
    </body>
</html>