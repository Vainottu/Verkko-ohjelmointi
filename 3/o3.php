<html>
    <head>
        <title>Ohjelma 2</title>
    </head>
    <body>
        <?php
        $nimi = $_POST["nimi"];
        $ikä = $_POST["ikä"];
        echo "Syötetty nimi on $nimi <br>";
        
        echo "syötetty ikä on $ikä <br>";

        echo "$nimi on $ikä vuotta vanha."
        ?>
    </body>
</html>