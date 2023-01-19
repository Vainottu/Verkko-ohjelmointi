<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title> Ohjelma 9</title>
    </head>
    <body>
        <?php
$merkkijono = $_POST["merkkijono"];
        if (strlen($merkkijono) >= 100) {
            echo "Annettu merkkijono oli liian pitkä";
        } else {
// a) merkkijono väärinpäin
// oma funktio, koska strrev ei tue utf8
            echo "väärinpäin: " . mb_strrev($merkkijono);
            echo "<br>";

//b laske sanat
            echo "Sanoja yhteensä: " . str_word_count($merkkijono);
            echo "<br>";

//c) laske montako koalaa merkkijonossa on
            echo "\"koala\" kpl: " . substr_count($merkkijono, 'koala');
            echo "<br>";

// d) annetun merkkijono hash crypt funktiolla

$merkkijono = $_POST["merkkijono"];
$salt = "random_salt_string";
$hashed_string = crypt($merkkijono, $salt);
echo $hashed_string;
echo "<br>";

// e) annettu merkkijono kokonaan isoilla kirjaimilla (mb_strtoupper)
$merkkijono = $_POST["merkkijono"];
$uppercase = mb_strtoupper($merkkijono, 'UTF-8');
echo $uppercase;
            echo "<br>";

// f) annettu merkkijono kokonaan pienillä kirjaimilla (mb_strtolower)
$merkkijono = $_POST["merkkijono"];
$lowercase = mb_strtolower($merkkijono, 'UTF-8');
echo $lowercase;


//Functiot
        }

        function mb_strrev($str){
            $r = '';
            for ($i = mb_strlen($str)-1; $i>=0; $i--){
                $r .= mb_substr($str, $i, 1);
            }
            return $r;
        }
        ?>
    </body>
</html>