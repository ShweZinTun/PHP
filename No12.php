<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table border=1 width='600' height='600'>";

        for($i=0; $i<8; $i++){
            echo "<tr>";
            for($j=1; $j<=8; $j++){
                
                $n=$i+$j;
                if($n%2==0){
                 echo "<td bgcolor='black'></td>";   
                }else{
                    echo "<td bgcolor='white'></td>";
                }
            }
            
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>