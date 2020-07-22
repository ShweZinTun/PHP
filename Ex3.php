<?php declare(strict_types=1);// strict requirement
//global
$x=5;
$y=10;

function myTest(){
    global $x,$y;
    $y=$x+$y;
}
myTest();

echo 'The result is: '. $y.'<br>';

//static
function myFuncion(){
    static $x=4;
    echo $x.'<br>';
    $x++;
}
myFuncion();
myFuncion();
myFuncion();

//case-sensitive constant name
define("GREETING","Welcome to W3schools.com!");
echo GREETING.'<br>';

//case-insensitive constant name
define("GREETING","Welcome to W3schools.com!",true);
echo greeting.'<br>';

//constant array
define("cars",["Alfa Romeo","BMW","Toyota"]);
echo cars[0].'<br>';

//constants are glabal
define("GREET","Welcome to W3schools.com");

function myFun(){
    echo GREET.'<br>';
}

myFun();

//operators
$x=6;
$x+=34;
echo $x.'<br>';

$x=15;
$x%=4;
echo $x.'<br>';

$x=100;
$y="100";
var_dump($x==$y);

var_dump($x===$y);

var_dump($x!=$y);

var_dump($x!==$y);
echo '<br>';
echo ++$x.'<br>';

echo $status=(empty($user))? "anonymous":"logged in";
echo '<br>';

$user="John Doe ";
echo $status=(empty($user))? "anonymous":"logged in";
echo '<br>';

//if..else..elseif statements

$t=Date("H");

if($t < 10){
    echo "Have a  good Morning!";
}else if($t < 20){
    echo "Have a good day!";
}else{
    echo "Have a good night";
}
echo '<br>';

//switch statement
$favcolor="green";
switch($favcolor){
    case "red":
    echo "Your favorite color is red";
    break;

    case "green":
    echo "Your favorite color is green";
    break;

    case "blue";
    echo "Your favorite color is blue";
    break;

    default:
    echo "Your favorite color is neither red, green or blue";
}

//while loop

$x=1;
while($x <= 5){
    echo "This number is: $x <br>";
    $x++;
}
echo "<br>";
// while loop
$x=0;
while($x <= 100){
    echo "The number is: $x <br>";
    $x+=10;
}
echo "<br>";
//do while loop
$x=1;
do{
    echo "The number is: $x <br>";
    $x++;
}while($x<=5);
echo "<br>";
//for loop

for($x=0; $x<=10; $x++){
    echo "The number is: $x <br>";
}
echo "<br>";
//foreach loop

$color=array("red", "green", "blue", "yellow");
foreach($color as $value){
    echo "$value <br>";
}
echo "<br>";

$age=array("Peter"=>"35", "Ben"=>"37", "joe"=>"38");
foreach($age as $x=>$val){
    echo "$x=$val <br>";
}
echo "<br>";

//break

for($x=0; $x<10; $x++){
    if($x==4){
    break;
    }
    echo "The number is: $x <br>";
}
echo "<br>";

//continue
for($x=0; $x<10; $x++){
    if($x==4){
        continue;
    }
    echo "The number is: $x <br>";
}
echo "<br>";
//function
function writeMsg(){
    echo "Hello World! <br><br>";
}
writeMsg();//call the function

function familyName($fname){
    echo "$fname <br>";
}
familyName("Kyaw");
familyName("Yee");
familyName("Thein");
familyName("Shwe");
echo '<br>';

function famName($fname, $year){
    echo "$fname. Born in $year <br>";
}
famName("Kyaw", "1956");
famName("Yee", "1958");
famName("Theingi", "1992");
famName("ShweZin", "1999");
echo '<br>';

function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);
  
  
  function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4)."<br><br>";

  function addNumbers(float $a, float $b) : float {
    return $a + $b;
  }
  echo addNumbers(1.2, 5.2).'<br><br>';

  function addNumber(float $a, float $b) : int {
    return (int)($a + $b);
  }
  echo addNumber(1.2, 5.2);
?>