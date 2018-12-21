<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Partger un lieu | BLUECOW®</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">Partager le lieu</h1>

     <main class="conteneur_ajout_lieu">
        <form>
          <fieldset>
            <legend>Partger le lieu par</legend>

            <input type="radio" name="collectif" value="adresse" required> Mail<br>
            <input type="radio" name="collectif" value="adresse" required> Facebook<br>
            <input type="radio" name="collectif" value="adresse" required> Messenger<br>
            <input type="radio" name="collectif" value="adresse" required> Twitter<br>
            <input type="radio" name="collectif" value="adresse" required> Instagramm<br>

            <textarea name="desc">Bertrix, situé en région Wallone dans la province du Luxembourg, tout près de Neufchateaux, le circuit offre un beau décor. Le circuit fait 1.6 km de longueur, compte pas moins de 5 bosses et de 3 tables, de quoi vous amuser si vous aimez les sensations.</textarea>
          
            <input type="submit" name="valider" value="Partager"><br>

          </fieldset>
        </form>
     </main>

      <?php require 'inc/footer.inc.php'; ?>
    </body>
</html>