<?php
global $i;
session_start();
$i=$_SESSION["i"];
if($i<=3){
    $i++;
}
else{$i=0;}

$_SESSION["i"]=$i;
header("Location: ../Views/index.php");
?>
