<!DOCTYPE html>
<html>
    <head>
        <!-- Määritellään merkistö -->
        <meta charset="utf-8">
        <!-- Sivun otsikko -->
        <title>Lämpötilanmuunnin </title>
    </head>
    <body>
        <!-- Otsikko -->
        <h1>Lämpötilanmuunnin</h1>

        <!-- Lomake, jossa lämpötila muutetaan -->
       <form action="o10b.php" method="POST">
            <!-- Lomakkeen sisältö -->
            <p>                  
                <br>
                <!-- Radio-painikkeet lämpötilan yksikön valitsemiseen -->
                Mihin yksikköön muutetaan: 
                <input type="radio" value="Celsius" name="yksikko" checked>Celsius
                <input type="radio" value="Fahrenheit" name="yksikko">Fahrenheit
                <br>
                <!-- Tekstikenttä lämpötilan syöttämiseen -->
                <label for="lampotila">Kirjoita muunnettava lämpötila:</label>
                <input type="text" id="lampotila" name="lampotila" required
                       minlength="1" maxlength="8" size="10">
                <!-- Lomakkeen lähetyspainike -->
                <input type="submit" name="Lähetä">
            </p>
        </form>

        <!-- PHP-koodi lämpötilan muuntamiseen -->
        <?php
        // Tarkistus, jos ohjelma on kutsuttu GET-parametreilla
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            echo "Ohjelmaa ei ole kutsuttu lomakkeen kautta.";
        } else {
            // Haetaan lähetettyjen tietojen yksikkö ja lämpötila
            $yksikko = $_POST["yksikko"];
            $lampotila = $_POST["lampotila"];
            $laskettu = 0;

            // Tarkistetaan valittu yksikkö ja muunnetaan lämpötila
            if ($yksikko == "Fahrenheit") 
            {
                // Muunnetaan Fahrenheit Celsius-asteiksi
                $laskettu = ($lampotila - 32) / 1.8;
                echo "Muutettu lämpötila on: $laskettu °C";
            } 
            else 
            {
                // Muunnetaan Celsius Fahrenheit-asteiksi
                $laskettu = $lampotila * 1.8 + 32;
                echo "Muutettu lämpötila on: $laskettu °F";
            }
        }
    ?>
    </body>
</html>
