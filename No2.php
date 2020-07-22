<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Please enter a string :<input type="text" name="name"><br>
    Please enter a number :<input type="text" name="num"><br>
    <input type="submit" name="submit" value="submit">   
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $num= $_POST["num"];
        echo substr($name,$num);
        
          
    }
    
?>
</body>
</html>