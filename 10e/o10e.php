<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Ohjelma 9c</title>
</head>
<body>
    <?php
// Haetaan hetu lomakkeelta
$hetu = $_GET["hetu"];
//Funktiota kutsutaan
$result = tarkastaHetu($hetu);
echo $result ? 'Hetu on oikea': 'Hetu ei ole oikea';
//Funktion määrittely
function tarkastaHetu($str)
{
$pituus = false;
$merkkilista = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "A", "B", "C", "D", "E", "F", "H", "J", "K", "L", "M", "N", "P", "R", "S", "T", "U", "V", "W", "X", "Y");
// Tarkastetaan onko HETU oikean pituinen ja oikeassa muodossa
if (strlen($str) == 11 && is_numeric(substr($str, 0, 6))) 
{
    $pituus = true;
}

//Jos pituus ei ole oikea, loppuu / Väärin
else 
{
    $pituus = false;
    return false;
}



//Pienempiin osiin
if ($pituus = true)
{
    $pv = substr($str, 0,2);
    $kk = substr($str, 2,2);
    $v = substr($str, 4,2);
    $merkki = substr($str, 6,1);
    $kerroin = substr($str,0,6) . substr($str, 7,3);
    $tarkistus = substr($str, 10,1);
    $jaannos = $kerroin % 31;

    // Katsotaan  onko hetu kirjoitettu oikein
    if ($pv <= "31" && $pv > "0" && $kk <= "12" && $kk > "0" && $v <= "99" && $v >= "1" && $merkki == "+" || $merkki == "-" || $merkki == "A") 
    {                
        if ($merkkilista[$jaannos] == $tarkistus) 
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    else 
    {
        return false;
    }
}
}

    ?>
</body>
</html>