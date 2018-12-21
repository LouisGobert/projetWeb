<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un événement| BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">Ajouter un événement</h1>

      <main class="conteneur_ajout_lieu">

        <form>
          <fieldset>
            <legend>Ajout d'un événement</legend>
            <input id="nom" name="nom" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" required autofocus placeholder="Intitulé de l'événement"><br>

            <label>Date de d'événement : </label><input type="date" name="dateEvenement" required></label><br>

            <input type="radio" name="collectif" value="collectif" required> Collectif<br>
            <input type="radio" name="collectif" value="nonCollectif" required> Non collectif<br>

            <textarea name="desc">Décriver l'événement </textarea>
          
            <input type="submit" name="valider" value="Valider"><br>
          </fieldset>
        </form>

      </main>


      <?php require 'inc/footer.inc.php'; ?>
    </body>
</html>