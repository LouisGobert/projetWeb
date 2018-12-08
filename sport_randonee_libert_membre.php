<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>RANDONNEE FERME LIBERT | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">La randonnée à la ferme Libert</h1>



      <div class="inutile">space</div>


      <main>
        <section class="conteneur_presen_sport">

          <article class="sport_detail" id="detail_lieu">
            <h2>La randonnée à la ferme Libert,</h2><p>Les randonnées proposées à la ferme Libert sont généralement assez peu dificile, peu de dénivellé, mais cependant des parcours de plus de 30km sont proposé pour les plus courageux. Si vous voulez vous promener sans trop de difficulté c'est ce qu'il vous faut.</p>
          </article>

          <article class="infos_lieu">
            <h4>Autre sport au même lieu :</h4>
            <h5><a href="sport_trail_ferme_membre.php" title="Trail"><i class="fas fa-running"></i></a>
              <a href="sport_vtt_libert_membre.php" title="VTT"><i class="fas fa-bicycle"></i></a></h5>
            <h4>Adresse</h4>
              <p>Route de la Ferme Libert 13</p>
              <p>4960, Malmedy</p>
              <p>Belgique <img src="images/flag/belgium-flag-icon-16.png" alt="Drapeau de la Belgique"></p>
              <p>Lattitude : 50.446332</p>
              <p>Longitude : 6.032465</p>
            
          </article>
          <article id="map_ferme_libert">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1096233.6300764813!2d5.289143759571776!3d50.34611528473848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6d775d501c260e02!2sBikepark%2C+ferme+Libert!5e0!3m2!1sfr!2sbe!4v1542916617854" width="690" height="450" style="border:0" allowfullscreen></iframe>
          </article>

          <section class="barre_galerie">
            <h2>Galerie</h2>
          </section>
          <aside class="ajouter_photo">
            <p>Ajouter une photo</p>
          </aside>

          <article class="sport_image">
            <img src="images/sport/randonnee_1.jpg" alt="Image de randonnée">
          </article>
          <article class="sport_image">
            <img src="images/sport/randonnee_2.jpg" alt="Image de randonnée">
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
                <i class="fas fa-star valide"></i>
                <i class="fas fa-star valide"></i>
              </p>
              <button title="Voter pour ce sport à ce lieu">Voter</button>
            </article>

            <article class="commentaire">
              <p><strong>Aline</strong> : Ca a l'air beau.</p><br>
              <p><strong>Moi </strong><a title="Supprimer se commentaire"><i class="fas fa-trash-alt"></i></a> : Je n'y suis jamais allé!!</p><br>
              <p><strong>Moi </strong><a title="Supprimer se commentaire"><i class="fas fa-trash-alt"></i></a> : Je n'y suis jamais allé!!</p><br>
              <p><strong>Moi </strong><a title="Supprimer se commentaire"><i class="fas fa-trash-alt"></i></a> : Je n'y suis jamais allé!!</p><br>
              <p><strong>Arnaud :</strong> Combien ca coute exactement ? Et combien de fois peux t'on le faire en une journée ?<br>Merci de vos réponse.</p><br>
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