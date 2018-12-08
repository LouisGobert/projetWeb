<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>MOTO-CROSS BERTRIX | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">Le moto-cross à Bertrix</h1>

      <div class="inutile">space</div>

      <main>
        <section class="conteneur_presen_sport">

          <article class="sport_detail" id="detail_lieu">
            <h2>La moto-cross à Bertrix,</h2><p>Ce lieu vous permettra de faire du moto-cross sur un circuit en plein air situé dans la province du Luxembourg. Avec un beau cardre et athmosphère pour rouler et se détendre.</p>
          </article>

          <article class="infos_lieu">
            <h4>Adresse</h4>
              <p>Rue de Biourges 56</p>
              <p>Gouvy, 6880</p>
              <p>Belgique <img src="images/flag/belgium-flag-icon-16.png" alt="Drapeau de la Belgique"></p>
              <p>Lattitude : 49.854235</p>
              <p>Longitude : 5.253556099</p>
          </article>
          <article id="map_ferme_libert">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1108345.2238087445!2d4.758506376309303!3d49.75363930645425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47ea80f428a1d7a7%3A0xb961558bf099a136!2sRue+de+Bl%C3%A9zy+37-3%2C+6880+Bertrix!3m2!1d49.8552702!2d5.2621708!5e0!3m2!1sfr!2sbe!4v1542999426837" width="690" height="450" style="border:0" allowfullscreen></iframe>
          </article>

          <section class="barre_galerie">
            <h2>Galerie</h2>
          </section>
          <aside class="ajouter_photo">
            <p>Ajouter une photo</p>
          </aside>

          <article class="sport_image">
            <img src="images/sport/moto_1.jpg" alt="Image de moto">
          </article>
          <article class="sport_image">
            <img src="images/sport/moto_2.jpg" alt="Image de moto">
          </article>
          <article class="sport_image">
            <img src="images/sport/moto_3.jpg" alt="Image de moto">
          </article>

          <a class="afficher_plus_sport" href="#">Afficher plus de photos</a>

          <section class="barre_galerie">
            <h2>Commentaire et note</h2>
          </section>

          <section class="bckg_grey">
            <article class="vote">
              <p>Note :<br>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </p>
              <button title="Voter pour ce lieu">Voter</button>
            </article>

            <article class="commentaire">
              <p><strong>Louis</strong> : Je n'y suis jamais allé!!</p><br>
              <p><strong>Aline</strong> : Ca a l'air beau.</p><br>
              <p><strong>Louis</strong> : Je n'y suis jamais allé!!</p><br>
              <p><strong>Louis</strong> : Je n'y suis jamais allé!!</p><br>
              <p><strong>Louis</strong> : Je n'y suis jamais allé!!</p><br>
              <p><strong>Arnaud</strong>Combien ca coute exactement ? Et combien de fois peux t'on le faire en une journée ?<br>Merci de vos réponse.</p><br>
              <p><strong>Louis</strong> : Je n'y suis jamais allé!!</p><br>
              <p><strong>Antoine</strong> : On peux faire du VTT ?</p>
              <form class="ajouter_commentaire">
                <input type="text" name="commentaire" placeholder="Commenter..." title="Ajouter votre propre commentaire">
              </form>
            </article>
          </section>
        </section>
        <article class="nb_vue">Cette page a été visionnée 362 fois</article>

      </main>

      <?php require 'inc/footer.inc.php'; ?>
    </body>
</html>