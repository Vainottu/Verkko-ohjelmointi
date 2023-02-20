<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Verkkokauppa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    
    <body>
        
        <div class="w3-container w3-teal">
            <h1>Verkkokauppa</h1>
        </div>
        
        <div class="w3-container">
            <p>
                
        <?php
                require("db_open.php");
                mysqli_set_charset($con, "utf8");
                
                $sql = "SELECT * FROM kategoriat";
                $result = $con->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "Ryhmä" . $row["id"]. ": " . $row["kategoria_nimi"]. "<br>";
                    }
                } else {
                    echo "0 tulosta";
                }
                
        ?>
                
            </p>
        </div>
        
        <div class="w3-container w3-teal">
            <p>Opiskelijan verkkokauppa</p>
        </div>
        
    </body>
</html>
