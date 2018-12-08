<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>VTT RAMPAGE| BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">Le VTT dans l'Utah</h1>



      <div class="inutile">space</div>


      <main>
        <section class="conteneur_presen_sport">

          <article class="sport_detail" id="detail_lieu">
            <h2>Le VTT dans l'Utah,</h2><p>Le désert de l'Utah au Etat-Unis est réputé pour ses belles montagnes et surtout pour sa température qui peux monter jusque 50 degrés. Ce lieu est donc bien évidemment destiné à des professionels aguéris qui savent ce qu'ils font.</p>
          </article>

          <article class="infos_lieu">
            <h4>Adresse</h4>
              <p>Diamond Fork Rd</p>
              <p>Orem, Utah</p>
              <p>Etat-Unis <img src="images/flag/united-states-of-america-flag-icon-16.png" alt="Drapeau des Etat-Unis"></p>
              <p>Lattitude : 38.80478295</p>
              <p>Longitude : -111.398145308</p>
          </article>
          <article id="map_ferme_libert">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d657198.5716922963!2d-111.79823032190643!3d40.09725569755107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x874dc8dac38ab89f%3A0x80f7867551bf6823!2sSpringville%2C+Utah+84663%2C+%C3%89tats-Unis!3m2!1d40.1336132!2d-111.3798928!5e0!3m2!1sfr!2sbe!4v1543004728773" width="690" height="450" style="border:0" allowfullscreen></iframe>
          </article>

          <section class="barre_galerie">
            <h2>Galerie</h2>
          </section>
          <aside class="ajouter_photo">
            <p>Ajouter une photo</p>
          </aside>

          <article class="sport_image">
            <img src="images/sport/vtt_1.jpg" alt="Image du sport">
          </article>
          <article class="sport_image">
            <img src="images/sport/utah_1.jpg" alt="Image du sport">
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