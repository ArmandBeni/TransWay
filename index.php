<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>test fr </title>
    <link rel="stylesheet" href="styles/style.css"/>
  </head>
  <body>
    <a href="home.php" title="anglais"> EN</a>
    <!-- formulaire de contact gérer par contact.php -->
    <form name ="contact" method="post" action="contact.php">
      <p><input type="text" name="nom" placeholder="Nom" class="nom"></p>
      <p><input type="email" name="mail" placeholder="Adresse mail" class="mail"></p>
      <p><textarea name ="msg" rows="3" cols="80" class="msg" placeholder="Votre message"></textarea>
      <input type="hidden" name="lang" value="FR" class="langue">

      <input type="submit" value="envoyer"/>
      <input type="reset"/>
    </form>


    <script src="scripts/app.js"> </script>
  </body>
</html>
