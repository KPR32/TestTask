<?php
require_once '../Model/Song.php';
require_once '../Model/Dancer.php';

$song0=new Song();
$song0->id=0;
$song0->songName='Feels good';
$song0->songAuthor='Tony!Toni!Tone!';
$song0->songType='RNB';
$song0->songDesc='Танцоры, как и в хип-хопе, покачивают телом вперед назад, ноги в полу-присяде, руки согнуты в локтях, головой вперед-назад';

$song1=new Song();
$song1->id=1;
$song1->songName='Godzilla';
$song1->songAuthor='Eminem';
$song1->songType='Hip-hop';
$song1->songDesc='Танцоры покачивают телом вперед назад, ноги в полу-присяде, руки согнуты в локтях, головой вперед-назад';

$song2=new Song();
$song2->id=2;
$song2->songName='Gangnam Style';
$song2->songAuthor='PSY';
$song2->songType='Electrodance';
$song2->songDesc='Танцоры покачивают туловищем вперед-назад, совершают круговые движения-вращения руками, ноги двигаются в ритме';

$song3=new Song();
$song3->id=3;
$song3->songName='Falling Stars';
$song3->songAuthor='Eminence';
$song3->songType='House';
$song3->songDesc='Подобно electrodance,танцоры покачивают туловищем вперед-назад, совершают круговые движения-вращения руками, ноги двигаются в ритме';

$song4=new Song();
$song4->id=4;
$song4->songName='Right Round';
$song4->songAuthor='Flo Rida';
$song4->songType='Pop-music';
$song4->songDesc='Танцоры совершают плавные движения туловищем, руками, ногами и головой';

$dancer0=new Dancer();
$dancer0->name="Алексей";
$dancer0->danceType='RNB,Hip-hop';

$dancer1=new Dancer();
$dancer1->name="Дмитрий";
$dancer1->danceType='Electrodance,House';

$dancer2=new Dancer();
$dancer2->name="Евгений";
$dancer2->danceType='Pop-music';

global $dancerArray;
global $songArray;

$songArray[]=$song0;
$songArray[]=$song1;
$songArray[]=$song2;
$songArray[]=$song3;
$songArray[]=$song4;

$dancerArray[]=$dancer0;
$dancerArray[]=$dancer1;
$dancerArray[]=$dancer2;