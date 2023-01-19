<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title> Ohjelma 9C</title>
    </head>

    <body>
        <?php


  
  
  $id = $_POST['merkkijono'];
  if (checkID($id)) {
    echo "Henkilötunnus on oikea.";
  } else {
    echo "Henkilötunnus on virheellinen.";
  }


        function checkID($id)
        {
            // tarkistukset
            // palauttaa true jos henkilötunnus on oikea, false jos se on virheellinen
        }

?>


  
        ?>
    </body>
</html>