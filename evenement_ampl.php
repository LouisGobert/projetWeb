<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>CHAMPIONNAT AMPL | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">Championnat AMPL, 29/04/2019</h1>



      <div class="inutile">space</div>

      <main>
        <section class="conteneur_presen_sport">
          <article class="sport_detail" id="detail_lieu">
            <h2>Championnat AMPL</h2><p>Le championnat AMPL organise, début 2019 la célèbre course de Moto Cross à Bertrix. Lors de cette course, 350 pilotes prendront places sur la ligne de départ pour tenter de gagner la 5ème manche du championat AMPL.</p>
          </article>

          <aside class="infos_sur_evenement" id="infos_sur_evenement">
            <h2>Information</h2>
              <p>Date : <strong>29</strong> avril 2019</p>
              <p>Heure de départ : 10h30</p>
              <p>Nombre de pilote : 350 pilotes</p>
              <p>Nombre de tour : 5 tours</p>

          </aside>

          <article class="infos_categorie">
            <h2>Catégorie</h2>
              <h3>
                <i class="fas fa-motorcycle"></i> 60 CC : de 6 à 9 ans
              </h3>
              <h3>
                <i class="fas fa-motorcycle"></i> 80 CC : de 9 à 12 ans
              </h3>
              <h3>
                <i class="fas fa-motorcycle"></i> 80 CC : de 12 à 13 ans
              </h3>
              <h3>
                <i class="fas fa-motorcycle"></i> 125 CC : de 14 à 15 ans
              </h3>
              <h3>
                <i class="fas fa-motorcycle"></i> 125/250/500 CC : 16 ans et plus
              </h3>

          </article>

          <article class="infos_evenement">
            <h2>Lieu lié</h2>
            <a href="lieu_bertrix_anonyme.php"><p class="liaison">Bertrix, Luxembourg <i class="fas fa-map-pin"></i></p></a>
            <h2>Adresse</h2>
            <p>Rue de Biourges 56</p>
            <p>Gouvy, 6880</p>
            <p>Belgique <img src="images/flag/belgium-flag-icon-16.png" alt="Drapeau de la Belgique"></p>
            <p>Lattitude : 49.854235</p>
            <p>Longitude : 5.253556099</p>
            
          </article>

          <article id="map_ampl_eve">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1108345.2238087445!2d4.758506376309303!3d49.75363930645425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47ea80f428a1d7a7%3A0xb961558bf099a136!2sRue+de+Bl%C3%A9zy+37-3%2C+6880+Bertrix!3m2!1d49.8552702!2d5.2621708!5e0!3m2!1sfr!2sbe!4v1542999426837" width="690" height="450" style="border:0; width:100%; height:500px;overflow:auto;" allowfullscreen></iframe>
          </article>

        
          <section class="barre_galerie">
            <h2>Galerie</h2>
          </section>

          <article class="sport_image">
            <img src="images/sport/moto_1.jpg" alt="Image de moto">
          </article>
          <article class="sport_image">
            <img src="images/sport/moto_2.jpg" alt="Image de moto">
          </article>
          <article class="sport_image">
            <img src="images/sport/moto_3.jpg" alt="Image de moto">
          </article>
          <article class="sport_image">
            <img src="images/sport/moto_4.jpg" alt="Image de moto">
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