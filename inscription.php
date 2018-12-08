<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>INSCRIPTION | BLUECOW@</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/header.inc.php'; ?>

      <h1 class="position">Formulaire d'inscription</h1>

      <main class="inscription">
        <form>
          <fieldset>
            <legend>Inscription</legend>
            <input id="nom" name="nom" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" required autofocus placeholder="Nom">
            <input id="prenom" name="prenom" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" required placeholder="Prénom"><br>
            <input id="pseudo" name="pseudo" type="text" required placeholder="Nom d'utilisateur">
            <input id="email" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required placeholder="Adresse email"><br>
            <input id="password" name="password" type="password" required placeholder="Mot de passe">
            <input id="checkPassword" name="checkPassword" type="password" required placeholder="Confirmer mot de passe"><br>
          
            <input type="submit" name="valider" value="Valider"><br>
            <input class="deja_inscrit" type="button" name="Connection" value="Déjà inscrit ? Connectez-vous!">
          </fieldset>
        </form>
	  </main>


      <?php require 'inc/footer.inc.php'; ?>

      
    </body>
</html>