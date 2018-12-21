<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>RANDONNEE BAHIA FELIZ | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">La randonnée à Bahia Feliz</h1>

      <main>
        <section class="conteneur_presen_sport">

          <article class="sport_detail" id="detail_lieu">
            <h2>La randonnée à Bahia Feliz,</h2><p>La randonnée dans l'île Gran Canaria est rude d'une part car la température y est élevée et d'autre part car à part marcher le long de la plage, partout ailleur le dénivellé se fait resentir à chaque parcours. Si vous aimez les grands dénivellés et le beau paysage, c'est l'endroit qu'il vous faut.</p>
          </article>

          <article class="infos_lieu">
            <h4>Autre sport au même lieu :</h4>
            <h5><a href="sport_trail_bahia_membre.php" title="Trail"><i class="fas fa-running"></i></a></h5>
            <h4>Adresse</h4>
              <p>San Bartolomé de Tirajana 9</p>
              <p>Grand Cannarie, Las Palmas</p>
              <p>Espagne <img src="images/flag/spain-flag-icon-16.png" alt="Drapeau de l'Espagne"></p>
              <p>Lattitude : 27.7808</p>
              <p>Longitude : -15.520694</p>
          </article>
          <article id="map_ferme_libert">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d189851.25527681547!2d-15.70361823429055!3d27.849952176401285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xc409df4ff0005dd%3A0xba3a3001bab4c5c!2sUnnamed+Road%2C+35107+San+Bartolom%C3%A9+de+Tirajana%2C+Las+Palmas%2C+Espagne!3m2!1d27.788840399999998!2d-15.522015!5e0!3m2!1sfr!2sbe!4v1542992776268" width="680" height="450" style="border:0" allowfullscreen></iframe>
          </article>

          <section class="barre_galerie">
            <h2>Galerie</h2>
          </section>
          <aside class="ajouter_photo">
            <a href="formulaire_ajout_photo.php">
              <p>Ajouter une photo</p>
            </a>
          </aside>

          <article class="sport_image">
            <img src="images/sport/bahia_feliz_1.jpg" alt="Image du lieu">
          </article>
          <article class="sport_image">
            <img src="images/sport/utah_2.jpg" alt="Image du lieu">
          </article>
          <article class="sport_image">
            <img src="images/sport/trail_1.jpg" alt="Image du lieu">
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
                <i class="fas fa-star"></i>
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