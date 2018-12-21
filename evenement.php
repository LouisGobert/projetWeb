<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>EVENEMENT | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/header.inc.php'; ?>

      <h1 class="position">Nos événements</h1>

      <article class="ajouter_un_lieu">
        <a href="formulaire_ajout_evenement.php">Ajouter un événement</a>
      </article>

      <main>

        <section class="barre">
          <h2>Evénements</h2>
        </section>

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
              <a class="action_sur_evenement" href="formulaire_partage.php" title="Partager l'événement"><i class="fas fa-share-alt"></i></a>
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
							
              <a class="action_sur_evenement" href="formulaire_partage.php" title="Partager l'événement"><i class="fas fa-share-alt"></i></a>
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
              <a class="action_sur_evenement" href="formulaire_partage.php" title="Partager l'événement"><i class="fas fa-share-alt"></i></a>
              <a class="action_sur_evenement" href="evenement_rampage.php#infos_rampage" title="Informations sur l'événement"><i class="fas fa-info-circle"></i></a>
              <a class="action_sur_evenement" href="evenement_rampage.php#map_rampage_eve" title="Voir sur le plan"><i class="fas fa-map-marked-alt"></i></a>
              <a class="action_sur_evenement" href="connexion.php" title="Suivre l'événement"><i class="far fa-calendar-plus"></i></a>
            </p>

            </aside>
          </article>
        </section>

      <aside class="option_affichage triage">
        <!-- Les choix d'affichage --> 
        <form>
          <label>Trier par 
            <select name="option_affichage">
              <option value="date_ante">date antéchronologique</option>
              <option value="nb_consultation">popularité</option>
            </select>
          </label>
        </form>

        <a class="afficher_plus" href="#" title="Afficher plus d'événements">Afficher plus d'événements</a>

        <form>
        <label>Afficher 
          <select name="option_affichage">
            <option value="individuel">sport individuel</option>
            <option value="equipe">sport par équipe</option>
            <option value="tous">les deux</option>
          </select>
        </label>
        </form>
          
      </aside>

      </main>

      
      <?php require 'inc/footer.inc.php'; ?>
    </body>
</html>