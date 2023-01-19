<html>
    <head>
        <title>Ohjelma 7</Title>
</head>
<body>

<?php
$yksikko = $_POST["yksikko"];
$lampotila = $_POST["lampotila"];
$laskettu = 0;

if ($yksikko == "Fahrenheit") 
{
    $laskettu = ($lampotila - 32) / 1.8;
    echo "Muutettu lämpötila on: $laskettu °C";
} 
else 
{
    $laskettu = $lampotila * 1.8 + 32;
    echo "Muutettu lämpötila on: $laskettu °F";
}


?>
</body>
</html>