<?php
require_once '../Model/Song.php';
require_once '../Model/Dancer.php';
require_once '../Views/index.php';
require_once 'DancersAndSongs.php';
global $dancerArray;
$dancerArray=$_SESSION["dancerArray"];
function PlaySong($i){
    global $songArray;
    $songs=$songArray;
    echo "<p><i>" . $songs[$i]->songName . ' - ' . $songs[$i]->songAuthor . ' (Тип песни - ' . $songs[$i]->songType . ')' . "</i></p>";
    echo  "<br>";
    echo "<p><i>" . $songs[$i]->songDesc . "</i></p>";
}

function RelaxDancer($i){
    global $dancerArray;
    global $songArray;
    $songs=$songArray;
    $dancers=$dancerArray;
    global $i;
    foreach ($dancers as $dancer){
        $a=$songs[$i]->songType;
        $b=$dancer->danceType;
        $pos = strpos($b,$a);
        if ($pos===false){
            echo "<p align='center'><i>" . $dancer->name ."</i></p>";
        }
    }
}

function CurrentDancer($i){
    global $dancerArray;
    global $songArray;
    $songs=$songArray;
    $dancers=$dancerArray;
    global $i;
    foreach ($dancers as $dancer){
        $a=$songs[$i]->songType;
        $b=$dancer->danceType;
        $pos = strpos($b,$a);
        if ($pos>-1){
            echo "<p align='center'><i>" . $dancer->name . "</i></p>";
        }
    }

}
