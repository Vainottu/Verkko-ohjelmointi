<!DOCTYPE html>
<html>
<head>
  <title>Autojen rekisterinumero-generaattori</title>
</head>
<body>
  <form action="" method="post">
    <label for="number_of_cars">Anna autojen lukumäärä:</label>
    <input type="text" id="number_of_cars" name="number_of_cars">
    <input type="submit" value="Luo rekisterinumerot">
  </form>
  <?php
    // Tarkistaa, onko lukumäärä syötetty ja syötetty luku on positiivinen kokonaisluku
    if (isset($_POST['number_of_cars']) && is_numeric($_POST['number_of_cars']) && $_POST['number_of_cars'] > 0) {
      $number_of_cars = intval($_POST['number_of_cars']);

      // Alustaa silmukan
      $i = 1;
      $registration_numbers = array();
      while ($i <= $number_of_cars) {
        // Generoi satunnaisen kolmen kirjaimen alkuosan
        $letters = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3);

        // Generoi satunnaisen numeron loppuosalle
        $numbers = rand(0, 999);
        if ($numbers < 10) {
          $numbers = "00" . $numbers;
        } elseif ($numbers < 100) {
          $numbers = "0" . $numbers;
        }

        // Yhdistää alkuosan ja loppuosan rekisterinumeroksi
        $registration_number = $letters . "-" . $numbers;

        // Tallentaa rekisterinumeron taulukkoon
        $registration_numbers[] = $registration_number;

        // Kasvattaa silmukan laskuria
        $i++;
      }

      // Tulostaa taulukossa tallennetut rekisterinumerot
      foreach ($registration_numbers as $registration_number) {
        echo $registration_number . "<br>";
      }
    }
  ?>
</body>
</html>
