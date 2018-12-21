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

      <h1 class="position">Ajouter une photo</h1>

      <main class="conteneur_ajout_photo">

        <p class="infos_ajout_photo">Lieux : Bertrix</p>
        <p class="infos_ajout_photo">Sport : Moto-cross</p>

        <section class="block_ajout_photo">
          <p>Les photos devront être vérifié par les gestionnaires avant leur publication.</p>

          <form>
            <input type="file" name="photo" accept="image/*">
            <input type="submit" name="valider" value="Valider"><br>
          </form>
        </section>

      </main>


      <?php require 'inc/footer.inc.php'; ?>
    </body>
</html>