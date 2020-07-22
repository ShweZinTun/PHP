<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="name"><br>
    <input type="submit" name="submit" value="submit">   
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name=array("");
        $name = $_POST["name"];
        $str= strlen($name);
        $arr= str_split($name);
        sort($arr);

        $total=0;
        foreach($arr as $i){
            $total+=$i;
        }
        echo "The average is: " .$avg=$total/$str."<br>";
        $min=$arr[0].$arr[1];
        echo "The two minimum number are: ". $min."<br>";
        $max=$arr[$str-2].$arr[$str-1];
        echo "The two maximum number are: ". $max;  
    }
?>
</body>
</html>