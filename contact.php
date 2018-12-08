<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>CONTACT | BLUECOW@</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/header.inc.php'; ?>
      
      <h1 class="position">Nous contacter</h1>
      
      
      <main class="inscription">
        <section class="conteneur_contact">
          <article class="infos_contact">
            <h2><strong>Téléphone</strong></h2>
            <h4>0472/40.97.77</h4>
            <hr>
            <h2><strong>Email</strong></h2>
            <h4><a href="mailto:louis.gobert2000@gmail.com">louis.gobert2000@gmail.com</a></h4>
            <hr>
            <h2><strong>Fax</strong></h2>
            <h4>04/361.00.38</h4>
          </article>
          <article class="formulaire_contact">
            <input id="nom" name="nom" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" required autofocus placeholder="Nom">
            <input id="email" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required placeholder="Adresse email"><br>
            <textarea rows="4" name="message" placeholder="Entrez votre message ici"></textarea>
      
            <input type="submit" name="valider" value="Envoyer"><br>
          </article>
        </section>
			</main>

      <?php require 'inc/footer.inc.php'; ?>
      
    </body>
</html>








