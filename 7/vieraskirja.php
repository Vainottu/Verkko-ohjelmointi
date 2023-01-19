<html>
    <head>
        <title>Ohjelma 7</Title>
</head>
<body>

<?php
$nimi = trim($_GET['nimi']); //poistetaan tyhjät merkit
$nimi = strip_tags($nimi); // poistetaan html-merkkaus

$viesti = $_GET["viesti"];
echo "$nimi";

echo "$viesti";
?>
</body>
</html>