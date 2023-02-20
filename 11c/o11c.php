<!DOCTYPE html>
<html>
<head>
  <title>Viitenumerot taulukossa-generaattori</title>
</head>
<body>
<form action="o11c.php" method="post">
  <input type="text" name="laskun_numero">
  <input type="submit" value="Laske tarkistenumero">
</form>
  </form>
  <?php

if(isset($_POST['laskun_numero'])){
    $laskun_numero = $_POST['laskun_numero'];
    $paino = 7;
    $tarkiste = 0;

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

$esimerkit = array(
    "749:8" => "Valmennusyrittäjän lasku",
    "152106991940095377:8" => "Vaasan Sähkön lasku",
    "1001045132150062816:4" => "Fennian lasku",
    "818798530:9" => "Puhtaanapito Bergströmin lasku"
);

$esimerkit[$laskun_numero . ":" . $tarkiste] = "Uusi lasku";

$tiedosto = fopen("esimerkit.txt", "w") or die("Tiedoston avaaminen epäonnistui!");
foreach($esimerkit as $viite => $kuvaus) {
    fwrite($tiedosto, $viite . " " . $kuvaus . "\n");
}
fclose($tiedosto);

}

  ?>
</body>
</html>
