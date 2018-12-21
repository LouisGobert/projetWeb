<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Validation de photo | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">Valider les photos</h1>

      <main class="conteneur_ajout_lieu ajout_evenement">
        
        <section class="conteneur_flex">
          <article class="conteneur">
            <section>
              <a href="lieu_bertrix_anonyme.php">
              <img src="images/sport/moto_3.jpg" alt="Moto Cross" class="image">
              <h3><img src="images/flag/belgium-flag-icon-32.png" alt="Drapeau de la Beglique"> Bertrix, Luxembourg </h3>

              <!--Le lieux -->
              <h5><img src="images/flag/belgium-flag-icon-16.png" alt="Drapeau de la Belgique"></h5>

              <!--  Liste des sports du disponibles -->
              </a>
              <p>
                <a href="sport_moto_bertrix_membre.php" title="Voir le sport"><i class="fas fa-motorcycle sport-present" title="Motocross"></i>
                </a>
              </p>

            </section>

            <aside class="infos">
            <p>
              
              <a class="action_sur_evenement" href="#" title="Valider la photo"> <i class="fas fa-check"></i></a>
              <a class="action_sur_evenement" href="profil.php" title="Information sur l'auteur de cette photo"><i class="fas fa-info-circle"></i></a>
              <a class="action_sur_evenement" href="#" title="Ne pas valider la photo"> <i class="fas fa-trash-alt"></i></a>
            </p>

            </aside>
          </article>

          <article class="conteneur">
            <section>
              <a href="lieu_ferme_libert_membre.php">
              <img src="images/sport/ferme_libert_1.jpg" alt="Moto Cross" class="image">
              <h3><img src="images/flag/belgium-flag-icon-32.png" alt="Drapeau de la Belgique"> Ferme Libert, Malmedy</h3>

              <!--Le lieux -->
              <h5><img src="images/flag/belgium-flag-icon-16.png" alt="Drapeau de la Belgique"></h5>

              <!--  Liste des sports du disponibles -->
              </a>
              <p>
                <a href="sport_trail_ferme_membre.php" title="Trail"><i class="fas fa-running"></i></a>
              </p>

            </section>

            <aside class="infos">
            <p>
              
              <a class="action_sur_evenement" href="#" title="Valider la photo"> <i class="fas fa-check"></i></a>
              <a class="action_sur_evenement" href="profil.php" title="Information sur l'auteur de cette photo"><i class="fas fa-info-circle"></i></a>
              <a class="action_sur_evenement" href="#" title="Ne pas valider la photo"> <i class="fas fa-trash-alt"></i></a>
            </p>
            </aside>
          </article>

          <article class="conteneur">
            <section>
              <a href="lieu_bahia_feliz_anonyme.php">
              <img src="images/sport/bahia_feliz_1.jpg" alt="Moto Cross" class="image">
              <h3><img src="images/flag/spain-flag-icon-32.png" alt="Drapeau de l'Espagne"> Bahía Feliz, Gran Canaria</h3>

              <!--Le lieux -->
              <h5><img src="images/flag/spain-flag-icon-16.png" alt="Drapeau de l'Espagen"></h5>

              <!--  Liste des sports du disponibles -->
              </a>
              <p>
                <a href="sport_trail_bahia_membre.php" title="Trail"><i class="fas fa-running"></i></a>
              </p>

            </section>

            <aside class="infos">
            <p>
              <a class="action_sur_evenement" href="#" title="Valider la photo"> <i class="fas fa-check"></i></a>
              <a class="action_sur_evenement" href="profil.php" title="Information sur l'auteur de cette photo"><i class="fas fa-info-circle"></i></a>
              <a class="action_sur_evenement" href="#" title="Ne pas valider la photo"> <i class="fas fa-trash-alt"></i></a>

            </p>
            </aside>
          </article>
          
        </section>

      </main>


      <?php require 'inc/footer.inc.php'; ?>
    </body>
</html>