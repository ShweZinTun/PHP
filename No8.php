<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table border=1>";
        for($i=1; $i<=10; $i++){
            echo "<tr> \n";
            for($j=1; $j<=10; $j++){
               $res=$i * $j;
               echo "<td>".$res."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
</form>
</body>
</html>