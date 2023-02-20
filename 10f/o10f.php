<!DOCTYPE html>
<html>
<head>
  <title>Autojen rekisterinumero-generaattori</title>
</head>
<body>
<form action="o10f.php" method="post">
  <input type="text" name="laskun_numero">
  <input type="submit" value="Laske tarkistenumero">
</form>
  </form>
  <?php

if(isset($_POST['laskun_numero'])){
    $laskun_numero = $_POST['laskun_numero'];
    $tarkiste = 0;
    $paino = 7;
  
    for($i = strlen($laskun_numero) - 1; $i >= 0; $i--){
      $tarkiste += $laskun_numero[$i] * $paino;
      if ($paino == 7) {
        $paino = 3;
      } else if ($paino == 3) {
        $paino = 1;
      } else {
        $paino = 7;
      }
    }
    $tarkiste = (10 - $tarkiste % 10) % 10;
    echo "Viitenumerosi on $laskun_numero$tarkiste";
  }


  ?>
</body>
</html>
