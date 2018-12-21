<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>MOTO-CROSS BERTRIX | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">Ajouter un lieu</h1>

      <main class="conteneur_ajout_lieu">

        <form>
          <fieldset>
            <legend>Ajout d'un lieu</legend>
            <input id="nom" name="nom" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" required autofocus placeholder="Nom du lieu">
            <input id="latitude" name="latitude" type="text" required placeholder="Latitude">
            <input id="longitude" name="longitude" type="text" required placeholder="Longitude">
            <input id="pays" name="pays" type="text" required placeholder="Pays">
            <input id="province" name="province" type="text" required placeholder="Province">
            <input id="localite" name="localite" type="text" required placeholder="Localité">

            <input id="code_postal" name="code_postal" type="text" required placeholder="Code postal">
            <input id="rue" name="rue" type="text" required placeholder="Rue">
            <input id="numero" name="numero" type="text" required placeholder="Numéro"><br>
            <textarea>Décriver le lieu</textarea>
          
            <input type="submit" name="valider" value="Valider"><br>
          </fieldset>
        </form>

      </main>


      <?php require 'inc/footer.inc.php'; ?>
    </body>
</html>