<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>ACCUEIL | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      
      <?php require 'inc/header.inc.php'; ?>

      <h1 class="position">Accueil</h1>

			<div class="inutile"></div>
			

      <main>

        <section class="barre">
          <h2>Nos événements</h2>
        </section>

        <aside class="option_affichage triage">
          <!-- Les choix d'affichage --> 
          <form>
              <label>Trier par <select name="option_affichage">
                  <option value="date_ante">date antéchronologique</option>
                  <option value="nb_consultation">popularité</option>
              </select></label>
          </form>
            <form>
              <label>Afficher <select name="option_affichage">
                  <option value="individuel">sport individuel</option>
                  <option value="equipe">sport par équipe</option>
                  <option value="tous">les deux</option>
              </select></label>
          </form>
        </aside>

        <!-- ceci regroupe tout les événements-->
        <section class="conteneur_flex">

          <article class="conteneur">
            <section>
            <a href="evenement_ampl.php" title="BlueCow® DownHill">
            <!--Regroupe :
              - Le nom de l'événement
              - la date
              - les sports
            -->
              <img src="images/sport/moto_2.jpg" alt="Moto-Cross" class="image">
              <h3>Championnat AMPL</h3>

              <!--La date-->
              <p class="infos_date">24<br>avr</p>

              <!--Le lieux -->
              <h5><img src="images/flag/belgium-flag-icon-16.png" alt="Drapeau de la Belgique"> Luxembourg, Belgique</h5>

              <!--  Liste des sports du disponibles -->
              </a>
              <p>
                <a href="sport_moto_bertrix_membre.php" title="Moto-Cross"><i class="fas fa-motorcycle"></i></a>
              </p>

            </section>

            <aside class="infos">
            <p>
              <a class="action_sur_evenement" href="mailto:?subject=Championnat_AMPL&body=http://192.168.128.13/~e180596/EVAL_V1/evenement_ampl.php" title="Partager l'événement"><i class="fas fa-share-alt"></i></a>
              <a class="action_sur_evenement" href="evenement_ampl.php#infos_ampl" title="Informations sur l'événement"><i class="fas fa-info-circle"></i></a>
              <a class="action_sur_evenement" href="evenement_ampl.php#map_ampl_eve" title="Voir sur le plan"><i class="fas fa-map-marked-alt"></i></a>
              <a class="action_sur_evenement" href="connexion.php" title="Suivre l'événement"><i class="far fa-calendar-plus"></i></a>
            </p>

            </aside>

          
          </article>

          <article class="conteneur">
            <section>
              <a href="evenement_transgrandcannaria.php" title="Transgrancanaria">
              <img src="images/sport/trail_1.jpg" alt="Transgrancanaria" class="image">
              <h3>Transgrancanaria</h3>

              <p class="infos_date">22<br>fev</p>

              <h5><img src="images/flag/spain-flag-icon-16.png" alt="Drapeau de l'Espagne"> Gran Canaria, Espagne</h5>

              </a>
              <p>
                <a href="sport_trail_bahia_membre.php" title="Trail"><i class="fas fa-running"></i></a>
              </p>
      

            </section>

            <aside class="infos">
            <p>
              
              <a class="action_sur_evenement" href="mailto:?subject=Transgrancanaria&body=http://192.168.128.13/~e180596/EVAL_V1/evenement_transgrandcannaria.php" title="Partager l'événement"><i class="fas fa-share-alt"></i></a>
              <a class="action_sur_evenement" href="evenement_transgrandcannaria.php#infos_trans" title="Informations sur l'événement"><i class="fas fa-info-circle"></i></a>
              <a class="action_sur_evenement" href="evenement_transgrandcannaria.php#map_trans_eve" title="Voir sur le plan"><i class="fas fa-map-marked-alt"></i></a>
              <a class="action_sur_evenement" href="connexion.php" title="Suivre l'événement"><i class="far fa-calendar-plus"></i></a>
            </p>
            </aside>
          </article>

          <article class="conteneur">
            <section>
            <a href="evenement_rampage.php" title="Rampage">
              <img src="images/sport/vtt_1.jpg" alt="Rampage" class="image">
              <h3>Rampage</h3>

              <p class="infos_date"><span>NOUVEAU</span><br>26<br>oct</p>

              <h5><img src="images/flag/united-states-of-america-flag-icon-16.png" alt="Drapeau des Etats-Unis"> Utah, États-Unis</h5>
  
              </a>
              <p>
                <a href="sport_vtt_rampage_membre.php" title="Vélo tout terain"><i class="fas fa-bicycle"></i></a>
              </p>
            </section>

            <aside class="infos">
            <p>
              <a class="action_sur_evenement" href="mailto:?subject=Rampage&body=http://192.168.128.13/~e180596/EVAL_V1/evenement_rampage.php" title="Partager l'événement"><i class="fas fa-share-alt"></i></a>
              <a class="action_sur_evenement" href="evenement_rampage.php#infos_rampage" title="Informations sur l'événement"><i class="fas fa-info-circle"></i></a>
              <a class="action_sur_evenement" href="evenement_rampage.php#map_rampage_eve" title="Voir sur le plan"><i class="fas fa-map-marked-alt"></i></a>
              <a class="action_sur_evenement" href="connexion.php" title="Suivre l'événement"><i class="far fa-calendar-plus"></i></a>
            </p>

            </aside>
          </article>
        </section>

        <!--

      Séparation événement et lieux

        -->
       <a class="afficher_plus" href="#" title="Afficher plus d'événements">Afficher plus d'événements</a>

        <section class="barre">
          <h2>Nos lieux</h2>
        </section>

        <nav class="option_affichage">
          <!-- Les choix d'affichage --> 
          <form>
              <label>Trier par <select name="option_affichage">
                  <option value="date_ante">date antéchronologique</option>
                  <option value="nb_consultation">popularité</option>
              </select></label>
          </form>
        </nav>

        <section class="conteneur_flex">
          <article class="conteneur">
            <section>
              <a href="lieu_bertrix_anonyme.php">
              <img src="images/sport/moto_3.jpg" alt="Moto Cross" class="image">
              <h3><img src="images/flag/belgium-flag-icon-32.png" alt="Drapeau de la Beglique"> Bertrix, Luxembourg </h3>

              <p class="infos_date"><span>MODIFI&#201;</span></p>

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
              <a class="action_sur_evenement" href="mailto:?subject=Bertrix&body=http://192.168.128.13/~e180596/EVAL_V1/lieu_bertrix_anonyme.php" title="Partager le lieux"><i class="fas fa-share-alt"></i></a>
              <a class="action_sur_evenement" href="lieu_bertrix_anonyme.php#infos_bertrix" title="Information sur le lieux"><i class="fas fa-info-circle"></i></a>
              <a class="action_sur_evenement" href="lieu_bertrix_anonyme.php#map_bertrix" title="Voir sur le plan"><i class="fas fa-map-marked-alt"></i></a>
              <a class="action_sur_evenement" href="connexion.php" title="Suivre ce lieu"><i class="far fa-calendar-plus"></i></a>
            </p>

            </aside>
          </article>

          <article class="conteneur">
            <section>
              <a href="lieu_ferme_libert_membre.php">
              <img src="images/sport/ferme_libert_1.jpg" alt="Moto Cross" class="image">
              <h3><img src="images/flag/belgium-flag-icon-32.png" alt="Drapeau de la Belgique"> Ferme Libert, Malmedy</h3>

              <p class="infos_date">Lieu</p>

              <!--Le lieux -->
              <h5><img src="images/flag/belgium-flag-icon-16.png" alt="Drapeau de la Belgique"></h5>

              <!--  Liste des sports du disponibles -->
              </a>
              <p>
                <a href="sport_trail_ferme_membre.php" title="Trail"><i class="fas fa-running"></i></a>
                <a href="sport_randonee_libert_membre.php" title="Randonnée"><i class="fas fa-hiking"></i></a>
                <a href="sport_vtt_libert_membre.php" title="Vélo tout terain"><i class="fas fa-bicycle"></i></a>
              </p>

            </section>

            <aside class="infos">
            <p>
              <a class="action_sur_evenement" href="mailto:?subject=Ferme_Libert&body=http://192.168.128.13/~e180596/EVAL_V1/lieu_ferme_libert_membre.php" title="Partager le lieux"><i class="fas fa-share-alt"></i></a>
              <a class="action_sur_evenement" href="lieu_ferme_libert_membre.php#infos_libert" title="Information sur le lieux"><i class="fas fa-info-circle"></i></a>
              <a class="action_sur_evenement" href="lieu_ferme_libert_membre.php#map_libert" title="Voir sur le plan"><i class="fas fa-map-marked-alt"></i></a>
              <a class="action_sur_evenement" href="connexion.php" title="Suivre ce lieu"><i class="far fa-calendar-plus"></i></a>
            </p>
            </aside>
          </article>

          <article class="conteneur">
            <section>
              <a href="lieu_bahia_feliz_anonyme.php">
              <img src="images/sport/bahia_feliz_1.jpg" alt="Moto Cross" class="image">
              <h3><img src="images/flag/spain-flag-icon-32.png" alt="Drapeau de l'Espagne"> Bahía Feliz, Gran Canaria</h3>

              <p class="infos_date">Lieu</p>

              <!--Le lieux -->
              <h5><img src="images/flag/spain-flag-icon-16.png" alt="Drapeau de l'Espagen"></h5>

              <!--  Liste des sports du disponibles -->
              </a>
              <p>
                <a href="sport_trail_bahia_membre.php" title="Trail"><i class="fas fa-running"></i></a>
                <a href="sport_randonee_bahia_membre.php" title="Randonnée"><i class="fas fa-hiking"></i></a>
              </p>

            </section>

            <aside class="infos">
            <p>

              <a class="action_sur_evenement" href="mailto:?subject=Bahia_Feliz&body=http://192.168.128.13/~e180596/EVAL_V1/lieu_bahia_feliz_anonyme.php" title="Partager le lieux"><i class="fas fa-share-alt"></i></a>
              <a class="action_sur_evenement" href="lieu_bahia_feliz_anonyme.php#infos_bahia" title="Information sur le lieux"><i class="fas fa-info-circle"></i></a>
              <a class="action_sur_evenement" href="lieu_bahia_feliz_anonyme.php#map_bahia" title="Voir sur le plan"><i class="fas fa-map-marked-alt"></i></a>
              <a class="action_sur_evenement" href="connexion.php" title="Suivre ce lieu"><i class="far fa-calendar-plus"></i></a>
            </p>
            </aside>
          </article>
          
        </section>
      
      <a class="afficher_plus" href="#">Afficher plus de lieux</a>
      

      </main>

      
      <?php require 'inc/footer.inc.php'; ?>
    </body>
</html>