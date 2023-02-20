<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ohjelma 10</title>
</head>    
<body>

<!---Tähän asti lomake on tallennettu omaan html tiedostoon ja sen kutsuma php ohjelma on tallennettu omaan tiedostoon.

Tämä on koodaajalle luonnollisesti työläs, varsinkin kun sovellus on pieni ja olisi kätevää saada lomake ja koodi samaan muokkausikkunaan.

Tee ohjelma o10a.php 

 a) Ohjelman lomake ja php koodi tallennetaan samaan tiedostoon, ja lomakkeessa viitataan samaan tiedostoon

 b) URL tähän ohjelmaan on  .../php/o10a.php  eikä lomakkeen .html kuten tähän asti

Lisää tähän linkki vlabiin sekä php ohjelmatiedosto -->

<h1>PHP-Ohjelma yhdessä tiedostossa</h1>

<!--lomake alkaa-->

<form action="o10a.php" method="GET">
    <p>
        Kpl: <input type="text" name="kpl"><br>
        <input type="submit" value="Lähetä">
</p>
</form>
<!--Lomake loppuu-->
<br> <br>

<?php
// php osuus

//tässä tutkitaan onko lomake lähetetty

if ($_SERVER['REQUEST_METHOD'] == "GET")
{
//jos lomakedataa tulossa, niin ohjelma tekee
//sillä mitä sitten halutaankin

    $kpl = strip_tags($_GET["kpl"]);
    echo $kpl;

}



?>
</body>
</html>