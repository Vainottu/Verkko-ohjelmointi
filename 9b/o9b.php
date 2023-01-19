<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title> Ohjelma 9B</title>
    </head>

    <body>
        <?php

// mb_strrevplus on funktio, joka kääntää merkkijonon ja laskee ohjausmuuttujan indeksiä eteenpäin.

// Funktion algoritmi toimii seuraavasti:
// 1. Aloitetaan silmukka, joka käy läpi merkkijonon kokonaisuudessaan
// 2. Otetaan merkkijonon kokonaispituus ja vähennetään se nykyisestä indeksistä
// 3. Käännetty merkkijono luodaan lisäämällä käännetty merkki indeksistä (pituus - nykyinen indeksi)
// 4. Ohjausmuuttujaa kasvatetaan yhdellä
// 5. Silmukka jatkuu kunnes ohjausmuuttuja on merkkijonon pituuden verran

function mb_strrevplus($merkkijono) {
    $reversed = '';
    $length = mb_strlen($merkkijono);
    for ($i = 0; $i < $length; $i++) {
        $reversed .= mb_substr($merkkijono, $length - $i - 1, 1);
    }
    return $reversed;
}

$merkkijono = $_POST['merkkijono'];
$reversed = mb_strrevplus($merkkijono);
echo "$reversed";
  
?> 
    </body>
</html>