<?php 

if(isset($_GET["graza"]) && !empty($_GET["graza"])) {
    $graza = $_GET["graza"];

    intval($graza/100);
    $graza = $graza%100;
    $graza100=$graza;
    echo $graza100;
    intval($graza/50);
    $graza50=$graza%50;
    echo $graza50;
    intval($graza/20);
    $graza20=$graza%20;
    echo $graza20;
    intval($graza/10);
    $graza=$graza%10;
    echo $graza;
    intval($graza/5);
    $graza=$graza%5;
    echo $graza;
    intval($graza/2);
    $graza=$graza%2;
    echo $graza;
    intval($graza/1);
    $graza=$graza%1;
    echo $graza;




echo "<br>";

echo $graza;
echo $graza;




}


?>