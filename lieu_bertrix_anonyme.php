<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>BERTRIX | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/header.inc.php'; ?>

      <h1 class="position">Bertrix</h1>

      <div class="inutile">space</div>

      <main>
        <section class="conteneur_presen_sport">
          <article class="sport_detail" id="detail_lieu">
            <span>Modifié le 1 juin 2018.</span>
            <h2>Bertrix,</h2><p>Situé en région Wallone dans la province du Luxembourg, tout près de Neufchateaux, le circuit offre un beau décor. Le circuit fait 1.6 km de longueur, compte pas moins de 5 bosses et de 3 tables, de quoi vous amuser si vous aimez les sensations.</p>
          </article>
          <article class="adresse_lieu" id="infos_bertrix">
            <h2>Adresse</h2>
              <p>Rue de Biourges 56</p>
              <p>Gouvy, 6880</p>
              <p>Belgique <img src="images/flag/belgium-flag-icon-16.png" alt="Drapeau de la Belgique"></p>
              <p>Lattitude : 49.854235</p>
              <p>Longitude : 5.2535560</p>
          </article>
          <article class="infos_lieus">
            <h2>Sport et événement à ce lieux</h2>
              <h3><a href="#" title="Moto-Cross"><i class="fas fa-motorcycle"></i></a>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <a class="button_sport" href="sport_moto_bertrix_membre.php" title="Visualiser en detail ce sport">Moto-cross</a>
              </h3>
              <h3>Championnat AMPL
                <a class="button_sport" href="evenement_ampl.php" title="Visualiser en detail ce sport">Voir la page</a>
              </h3>
          </article>
          <article id="map_bertrix">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1108345.2238087445!2d4.758506376309303!3d49.75363930645425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47ea80f428a1d7a7%3A0xb961558bf099a136!2sRue+de+Bl%C3%A9zy+37-3%2C+6880+Bertrix!3m2!1d49.8552702!2d5.2621708!5e0!3m2!1sfr!2sbe!4v1542999426837" width="800" height="450" style="border:0" allowfullscreen></iframe>
          </article>
        
          <section class="barre_galerie">
            <h2>Galerie</h2>
          </section>

          <article class="sport_image">
            <img src="images/sport/moto_1.jpg" alt="Image de moto">
          </article>
          <article class="sport_image">
            <img src="images/sport/moto_4.jpg" alt="Image de moto">
          </article>
          <article class="sport_image">
            <img src="images/sport/moto_3.jpg" alt="Image de moto">
          </article>
          <article class="sport_image">
            <img src="images/sport/moto_2.jpg" alt="Image de moto">
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