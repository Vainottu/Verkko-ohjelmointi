<html>
    <head>
        <title>Ohjelma</title>
    </head>
    <body>
        <?php
        $sukupuoli = $_POST["sukupuoli"];
        $ika = $_POST["ika"];

        //vaihtoehto mies
        if ($sukupuoli == "mies") {
            if ($ika == 1) 
            {
                echo "Olet mies parhaassa iässä!";
            } else
            {   
                echo "Olet viisas mies!";
            }
        }
            //Vaihtoehto Nainen 
        if ($sukupuoli == "nainen") {
            if ($ika == 1)
            {
            echo "Olet neito kauneimmillaan!";
            } else
            {
                echo "Näytät nuorelta ikäiseksesi!";
            }
        }
    

        //Vaihtoehto määrittelemätön

     if ($sukupuoli == "määrittelemätön") {
        if ($ika == 1)
        {
        echo "Olet nuorekas";
        } else
        {
                echo "Joskus on hyvä jättää määrittelemättä asioita kyselyihin, mikäli siihen on mahdollisuus";
        }
     }
    

        ?>
    </body>
</html>