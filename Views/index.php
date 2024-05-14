
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Design/Style.css" type="text/css" />
    <title>Клуб</title>
</head>
<body>
        <div id="div1">
            <form method="POST" action="../Controller/addDancer.php">
                <div>
                    <label style="position:relative;left:155px" for="title">Впишите имя нового участника</label><br>
                    <input style="position:relative;left:185px" type="text" name="dancerName" placeholder="Имя" required><br>
                </div>
                <div>
                    <br>
                    <label style="position:relative;left:180px" for="title">Укажите умения в танце</label><br><br>
                    <input style="position:absolute;left:3%;top:10.1%;" type="checkbox" name="RNB" value="RNB">
                    <label style="position:absolute;left:6%;top:9.9%;" for="title">RNB</label><br>
                    <input style="position:absolute;left:15%;top:10.1%;" type="checkbox" name="hp" value="Hip-hop">
                    <label style="position:absolute;left:19%;top:9.9%;" for="title">Хип-хоп</label><br>
                    <input style="position:absolute;left:31%;top:10.1%;" type="checkbox" name="Electrodance" value="Electrodance">
                    <label style="position:absolute;left:34%;top:9.9%;" for="title">Electrodance</label><br>
                    <input style="position:absolute;left:52%;top:10.1%;" type="checkbox" name="House" value="House">
                    <label style="position:absolute;left:55%;top:9.9%;" for="title">House</label><br>
                    <input style="position:absolute;left:65%;top:10.1%;"  type="checkbox" name="pm" value="Pop-music">
                    <label style="position:absolute;left:67%;top:9.9%;" for="title">Поп-музыка</label>
                </div>
                <div id="div12">
                    <input style="position:absolute;left:240px;top:155px;width=190px;" type="submit" name="submit" value="Добавить ">
                </div>
            </form>
            <div id="div11">
                ________________________________________________________________<br>
                <label style="position:absolute;left:190px;">Список участников и их умения</label><br><br>
                <?php
                require_once '../Controller/DancersAndSongs.php';

                session_start();
                    $dancers=$_SESSION["dancerArray"];
                    foreach ($dancers as $dancer)
                       echo "<p align='center'><i>" . $dancer->name . " - танцует " . $dancer->danceType . "</i></p>";

                ?>
            </div>
        </div>
        <div id="div2">
            <div id="div21">
                <p>На танцполе</p><br>
                <?php
                require_once '../Controller/Controller.php';
                $i=$_SESSION["i"];
                CurrentDancer($i);
                ?>
            </div>
            <div id="div22">
                <p>В баре</p><br>
                <?php
                $i=$_SESSION["i"];
                    RelaxDancer($i);
                ?>
            </div>
            <div id="div23">
                <p>Сейчас играет</p>
                <form method="POST" action="../Controller/nextSong.php">
                <input style="position:absolute;left:110px;top:1px;width:40px;height:15px;background:
                        grey;color:white;" type="submit" name="nextSong" value=">|"/>
                </form>
                <br>
                <?php
                $i=$_SESSION["i"];
                    PlaySong($i);
                ?>
            </div>
        </div>
</body>
</html>
