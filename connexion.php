<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>CONNEXION | BLUECOW@</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/header.inc.php'; ?>     

      <h1 class="position">Connexion</h1>
      <main class="inscription">
        <form>
          <fieldset>
            <legend>Connexion</legend>
            <input id="pseudo" name="pseudo" type="text" required placeholder="Nom d'utilisateur">
            <input id="password" name="password" type="password" required placeholder="Mot de passe">
          
            <input type="submit" name="valider" value="Valider"><br>
            <input class="deja_inscrit" type="button" name="Connection" value="Vous n'êtes pas encore inscrit ? Inscrivez-vous!" >
          </fieldset>
        </form>
			</main>
      
      <?php require 'inc/footer.inc.php'; ?>
           
    </body>
</html>








