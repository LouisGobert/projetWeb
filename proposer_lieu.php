<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PROPOSER UN LIEU | BLUECOW@</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>

      <h1 class="position">Proposer un lieu</h1>
      
      <main id="inscription">
        <form>
          <fieldset>
            <legend>Proposer un lieu</legend>
            <p>Le lieu ne sera pas publié directement. Un employé de BlueCow analysera la proposition et, si les informations sont exactes et si la personne de contact est valide, le lieu sera publié.</p>
            <input id="nom_lieu" name="nom_lieu" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" required autofocus placeholder="Nom du lieu">
            <input id="rue" name="rue" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" required placeholder="Rue">
            <input id="numero" name="numero" type="text" required placeholder="Numéro">
            <input id="code_postal" name="code_postal" type="text" required placeholder="Code postal">

            <input id="commune" name="commune" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" required placeholder="Commune">

            <input id="province" name="province" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" required  placeholder="Province">

            <input id="latitude" name="latitude" type="text" pattern="[1-9.]{1,}" required placeholder="Latitude">

            <input id="longitude" name="longitude" type="text" pattern="[1-9.]{1,}" required placeholder="Longitude">

            <input id="nom_contact" name="nom_contact" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" required placeholder="Nom de la personne de contact">

            <input id="email_contact" name="email-contact" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required placeholder="Adresse email de la personne de contact"><br>

            <p>Choissisez au minimum un sport :</p>
            <ul>
              <li>VTT <input type="checkbox" name="sport_vtt"></li>
              <li>Trail <input type="checkbox" name="sport_trail"></li>
              <li>Randonnée <input type="checkbox" name="sport_randonnee"></li>
              <li>Moto-cross <input type="checkbox" name="sport_moto_cross"></li>
            </ul>
          
            <input type="submit" name="valider" value="Valider"><br>
            <input type="reset" name="reset" value="Annuler et recommencer">
          </fieldset>
        </form>
			</main>



      <?php require 'inc/footer.inc.php'; ?>

      
    </body>
</html>








