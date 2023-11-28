<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

echo "A kapott adatok: "; 
/*print $_GET; //print és echo csak string-ek kiírására használható
print $_POST;
print $_REQUEST;*/
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
echo "<br>";
echo "<br>";
/*var_dump($_GET); //$_GET/POST/REQUEST ún. asszociatív tömbök
var_dump($_POST);
var_dump($_REQUEST);*/
$ipv4=$_REQUEST["ipv4"];
$reszek=explode(".", $ipv4);
//echo count ($reszek).": $reszek[0].$reszek[1].$reszek[2].$reszek[3]";
if (count($reszek)!=4) {
    die("Rossz hossz!");
}
if ($reszek[0]>=1&&$reszek[0]<=223){
    die("Rossz első");
}
    
    ;
