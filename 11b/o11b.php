<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset-utf-8">
        <title>Ohjelma 11B</title>
</head>

<body>
<button id="showDays">Näytä päivät</button>
    <div id="daysContainer"></div>
    

    
    <?php
function showDays() {
    $paivat = array("Maanantai", "Tiistai", "Keskiviikko", "Torstai", "Perjantai", "Lauantai", "Sunnuntai");

    for ($i = 0; $i < count($paivat); $i++) {
        if ($i % 2 == 0) {
            echo $paivat[$i] . "<br>";
        } 
    }
}
?>
<!--- Javascirpti painikkeelle---->

<script>
    document.getElementById("showDays").addEventListener("click", function() {
        let daysContainer = document.getElementById("daysContainer");
        daysContainer.innerHTML = "<?php showDays(); ?>";
    });
</script>
    </body>
    </html>