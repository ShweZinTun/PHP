<?php
    //global
    $x= 5;
    function myTest(){
        global $x;
        echo '<p> Variable x inside function is '. $x .'</p>';

    }
    myTest();
        echo '<p> Variable x outside function is '. $x.' </p>';
    
    //use echo    
    $txt1="Learn PHP";
    $txt2="W3schools.com";
    $i=10;
    $j=15;

    echo '<h2>'.$txt1.'</h2>';
    echo 'Study PHP at'.$txt2.'<br>';
    echo $i+$j;

    //use print
    print '<h2>Hello World!</h2>';
    print 'I am about to learn PHP <br>';

    //data types
    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));

    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));
    echo '<br>';

    $x=34255.78;
    $int_cast=(int)$x;
    echo $int_cast.'<br>';

    $x="34255.78";
    $int_cast=(int)$x;
    echo $int_cast.'<br>';

?>