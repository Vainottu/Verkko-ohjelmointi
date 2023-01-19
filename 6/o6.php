
<html>
    <head>
        <title>Ohjelma</title>
    </head>
    <body>
        <?php
    
    $lifespan = array(
        "mies" => array(2000 => 74, 2001 => 75, 2002 => 75, 2003 => 75, 2004 =>75, 2005 => 76, 2006 => 76,
    2007 => 76, 2008 => 76, 2009 => 76, 2010 => 77, 2011 =>77, 2012 => 78, 2013 =>78, 2014 => 78, 2015 => 79,
    2016 => 78, 2017 =>79, 2018 =>79, 2019 => 79, ),

        "nainen" => array(2000 => 81, 2001 => 82, 2002 => 82, 2003 => 82, 2004 => 82, 2005 => 82, 2006 => 83,
        2007 => 83, 2008 => 83, 2009 => 83, 2010 => 83, 2011 => 84, 2012 => 83, 2013 =>84, 2014 => 84, 2015 => 84,
        2016 => 84, 2017 => 84, 2018 => 84, 2019 => 85 ));
    
    $sukupuoli = $_POST['sukupuoli'];
    $syntymavuosi = $_POST['syntymavuosi'];
    
    if (array_key_exists($sukupuoli, $lifespan) && array_key_exists($syntymavuosi, $lifespan[$sukupuoli])) {
        echo "Elinikä ennusteesi on: " . $lifespan[$sukupuoli][$syntymavuosi];
    } else {
        echo "Ei dataa";
    }


        ?>
    </body>
</html>