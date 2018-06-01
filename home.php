<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>test en</title>
    <link rel="stylesheet" href="styles/style.css"/>
  </head>
  <body>
    <a href="index.php" title="French"> FR</a>
    <!-- formulaire de contact gérer par contact.php -->
    <form name ="contact" method="post" action="contact.php">
      <p><input type="text" name="nom" placeholder="Name" class="nom"></p>
      <p><input type="email" name="mail" placeholder="Email adress" class="mail"></p>
      <p><textarea name ="msg" rows="3" cols="80" class="msg" placeholder="Your message"></textarea>
      <input type="hidden" name="lang" value="FR" class="langue">

      <input type="submit" value="Send"/>
      <input type="reset" value ="Reset"/>
    </form>

    <script src="scripts/app.js"> </script>
  </body>
</html>
