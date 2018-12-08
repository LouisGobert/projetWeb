<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>NOTIFICATION| BLUECOW@</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>

      <?php require 'inc/headerMembre.inc.php'; ?>

      <section class="position">
        <h1>Mes notifications</h1>
        <span id="nombre_notification">4 non lues</span>
      </section>
      
      <main>
        <article class="notification">
          <a href="evenement_rampage.php">
            <p><i class="far fa-bell-slash" title="Ne plus suivre l'événement"></i> <i class="fas fa-trash-alt" title="Supprimer la notification"></i> |</p>
            <header>Rampage : </header>
            <article> Louis a ajouté un commentaire</article>
          </a>
        </article>

        <article class="notification">
          <a href="sport_vtt_libert_membre.php">
            <p><i class="far fa-bell-slash" title="Ne plus suivre l'événement"></i> <i class="fas fa-trash-alt" title="Supprimer la notification"></i> |</p>
            <header>VTT à la ferme Libert : </header>
            <article> Louis a ajouté un commentaire</article>
          </a>
        </article>

        <article class="notification">
          <a href="lieu_bertrix_anonyme.php">
            <p><i class="far fa-bell-slash" title="Ne plus suivre l'événement"></i> <i class="fas fa-trash-alt" title="Supprimer la notification"></i> |</p>
            <header>Bertrix : </header>
            <article> Aline a ajouté un commentaire</article>
          </a>
        </article>

        <article class="notification">
          <a href="sport_randonee_bahia_membre.php">
            <p><i class="far fa-bell-slash" title="Ne plus suivre l'événement"></i> <i class="fas fa-trash-alt" title="Supprimer la notification"></i> |</p>
            <header>Randonnée à Bahia Feliz : </header>
            <article> Louis a ajouté un commentaire</article>
          </a>
        </article>



      </main>


      <?php require 'inc/footer.inc.php'; ?>
      
    </body>
</html>








