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
    <input type="submit" name="submit" value="submit">   
</form>

<?php
    $name="";
    $newstr="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        for($char=0; $char<strlen($name); $char++){
            if($char==0){
                $newstr[$char]=strtoupper($name[$char]);
            }else if($name[$char]==" "){
                $char++;
                $newstr[$char]=strtoupper($name[$char]);
            }else{
                $newstr[$char]=$name[$char];
            }
        }

        
        echo $newstr;
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  
?>
</body>
</html>