<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $name= $email= $phone= $town= $grade= $subject="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name= $_POST["name"];
            $email= $_POST["email"];
            $phone= $_POST["phone"];
            $town= $_POST["town"];
            $grade= $_POST["grade"];
            $subject= $_POST["subject"];               
        }  
    ?>
    <h2>Student Registration Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        Name: <input type="text" name="name"><br><br>
        E-mail: <input type="text" name="email"><br><br>
        Phone: <input type="text" name="phone"><br><br>
        Township:
        <select name="town">
            <option value="Monywa">Monywa</option>
            <option value="Mandalay">Mandalay</option>
            <option value="Yangon">Yangon</option>
        </select><br><br>

        Grade:
        <input type="radio" name="grade" value="First Year">Final Year
        <input type="radio" name="grade" value="Second Year">Fourth Year
        <input type="radio" name="grade" value="Third Year">Third Year
        <br><br>

        Subject:
        <input type="checkbox" name="subject[]" value="C++">C++
        <input type="checkbox" name="subject[]" value="PHP">PHP
        <input type="checkbox" name="subject[]" value="Java">Java
        <input type="checkbox" name="subject[]" value="C#">C#
        <br><br>

        <input type="submit" name="submit" value="submit">
        </form>
    <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $phone;
        echo "<br>";
        echo $town;
        echo "<br>";
        echo $grade;
        echo "<br>";

        if(isset($_POST['submit'])){

            if(!empty($_POST['subject'])) {

                foreach($_POST['subject'] as $value){
                echo $value.'<br/>';
                }

            }
        }
    ?>
    
</body>
</html>