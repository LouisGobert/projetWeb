<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>RAMPAGE | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">Rampage, 26/10/2019</h1>

      <div class="inutile">space</div>

      <main>
        <section class="conteneur_presen_sport">
          <article class="sport_detail" id="detail_lieu">
            <span>Ajouté le 10 novembre 2018.</span>
            <h2>Rampage</h2><p>L'événement Rampage a lieu cette année dans le désert de l'Utah. Cette "course" réunis les meilleurs freeriders de VTT, ils ont pour objectif de trouver leurs propres lignes et de faire de beau tricks lorsqu'ils descendront les montagnes.</p>
          </article>

          <section class="centrage_infos_categorie" id="infos_rampage">
            <article class="infos_sur_evenement" id="infos_sur_evenement">
              <h2>Information</h2>
                <p>Date : <strong>26</strong> octobre 2019</p>
                <p>Heure de départ : 10h30</p>
                <p>Nombre de freerider : 35 pilotes</p>

            </article>

            <article class="infos_categorie i_rampage">
              <h2>Athlète</h2>
                <h3>
                  <i class="fas fa-bicycle"></i> Kurt Sorge (Canada)
                </h3>
                <h3>
                  <i class="fas fa-bicycle"></i> Cameron Zink (USA)
                </h3>
                <h3>
                  <i class="fas fa-bicycle"></i> Ethan Nell (USA)
                </h3>
                <h3>
                  <i class="fas fa-bicycle"></i> Brandon Semenuk (Canada)
                </h3>
                <h3>
                  <i class="fas fa-bicycle"></i> Brett Rheeder (Canada)
                </h3>
                <h3>
                  <i class="fas fa-bicycle"></i> Thomas Genon (Belgique)
                </h3>
                <h3>
                  <i class="fas fa-bicycle"></i> Carson Storch (USA)
                </h3>
                <h3>
                  <i class="fas fa-bicycle"></i> Kyle Strait (USA)
                </h3>
                <h3>
                  <i class="fas fa-bicycle"></i> Tyler McCaul (USA)
                </h3>
                <h3>
                  <i class="fas fa-bicycle"></i> Tom van Steenbergen (Canada)
                </h3>

            </article>
          </section>

          <article class="infos_evenement">
            <h2>Adresse</h2>
            <p>Diamond Fork Rd</p>
            <p>Orem, Utah</p>
            <p>Etat-Unis <img src="images/flag/united-states-of-america-flag-icon-16.png" alt="Drapeau des Etat-Unis"></p>
            <p>Lattitude : 38.80478295</p>
            <p>Longitude : -111.398145308</p>
            
          </article>

          <article id="map_rampage_eve">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d657198.5716922963!2d-111.79823032190643!3d40.09725569755107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x874dc8dac38ab89f%3A0x80f7867551bf6823!2sSpringville%2C+Utah+84663%2C+%C3%89tats-Unis!3m2!1d40.1336132!2d-111.3798928!5e0!3m2!1sfr!2sbe!4v1543004728773" width="690" height="450" style="border:0" allowfullscreen></iframe>
          </article>

        
          <section class="barre_galerie">
            <h2>Galerie</h2>
          </section>

          <article class="sport_image">
            <img src="images/sport/utah_1.jpg" alt="Image du sport">
          </article>
          <article class="sport_image">
            <img src="images/sport/vtt_5.jpg" alt="Image du sport">
          </article>
          <article class="sport_image">
            <img src="images/sport/utah_2.jpg" alt="Image du sport">
          </article>
          <article class="sport_image">
            <img src="images/sport/vtt_1.jpg" alt="Image du sport">
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
          <article class="nb_vue">Cette page a été visionnée 38962 fois</article>
          
        </section>
      </main>


      <?php require 'inc/footer.inc.php'; ?>
    </body>
</html>