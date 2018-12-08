<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PROFIL| BLUECOW@</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>

    <body>
      <?php require 'inc/headerMembre.inc.php'; ?>
      <h1 class="position">Mon profil</h1>

      
      <main class="inscription">
        <form>
          <fieldset id="modification">
            <legend>Modifier mes informations</legend>

            <label>Votre nom : Gobert</label><input id="nom" name="nom" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" placeholder="Modifier par..."><br>
            <label>Votre prénom : Louis</label><input id="prenom" name="prenom" type="text" pattern="[a-zA-Zéèàêîâ-]{3,}" placeholder="Modifier par..."><br>

            <label>Nouveau mot de passe</label><input id="mdp" name="mdp" type="password" pattern="[a-zA-Zéèàêîâ-]{3,}" placeholder="Modifier par..."><input id="mdpConfirm" name="mdpConfirm" type="password" pattern="[a-zA-Zéèàêîâ-]{3,}" placeholder="Confirmer mot de passe"><br>

            <label>Adresse email : louis.gobert2000@gmail.com</label><input id="email" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Modifier par..."><br>

            <label>Ajouter une photo de profil</label><input type="file" name="image" id="image" accept=".jpg, .png, .jpeg"><br>
          
            <input type="submit" name="valider" value="Valider"><br>

          </fieldset>

          
        </form>

        <section>
            <h2>Modifier mes suivis</h2>

            <section class="suivi_eve">
              <h3>Mes événements suivis : </h3>
              <ul>
                <li><a title="Retirer des suivis">Rampage <i class="fas fa-trash-alt"></i></a></li>
                <li><a title="Retirer des suivis">Championnat AMPL <i class="fas fa-trash-alt"></i></a></li>
              </ul>
            </section>

            <section class="suivi_eve">
              <h3>Mes lieux suivis : </h3>
              <ul>
                <li><a title="Retirer des suivis">Ferme Libert <i class="fas fa-trash-alt"></i></a></li>
                <li><a title="Retirer des suivis">Bahia Feliz <i class="fas fa-trash-alt"></i></a></li>
              </ul>
            </section>

            <section class="suivi_eve">
              <h3>Mes sport suivis : </h3>
              <ul>
                <li><a title="Retirer des suivis">VTT à Bertrix <i class="fas fa-trash-alt"></i></a></li>
                <li><a title="Retirer des suivis">Trail à Bahia Feliz <i class="fas fa-trash-alt"></i></a></li>
                <li><a title="Retirer des suivis">Randonnée à Bahia Feliz <i class="fas fa-trash-alt"></i></a></li>
              </ul>
            </section>

          </section>
			</main>



      <?php require 'inc/footer.inc.php'; ?>
      
    </body>
</html>








