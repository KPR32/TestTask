<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
require_once '../Model/Dancer.php';
require_once 'DancersAndSongs.php';
global $name;
global $danceType0;
if(isset($_POST["dancerName"])){
    $name = $_POST["dancerName"];
}
if(isset($_POST["RNB"])){
    $danceType0 = "  " . $_POST["RNB"];
}
if(isset($_POST["hp"])){
    $danceType0 = $danceType0 . ', ' . $_POST["hp"];
}
if(isset($_POST["Electrodance"])){
    $danceType0 = $danceType0 . ', ' . $_POST["Electrodance"];
}
if(isset($_POST["House"])){
    $danceType0 = $danceType0 . ', ' . $_POST["House"];
}
if(isset($_POST["pm"])){
    $danceType0 = $danceType0 . ', ' . $_POST["pm"];
}
$danceType0=substr($danceType0,1);
$dancer=new Dancer();
$dancer->name=$name;
$dancer->danceType=$danceType0;

global $dancerArray;
$dancerArray[]=$dancer;
session_start();
$dancerArray=$_SESSION["dancerArray"];
$dancerArray[]=$dancer;
$_SESSION["dancerArray"]=$dancerArray;
header("Location: ../Views/index.php");
?>
