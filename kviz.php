<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="kviz_style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Kvíz</title>
</head>
<body>
<?php
    $a = 4;
    $b = 2;
    $c = 5;
    $skore = 0;
    $sent = 0;
    if (isset($_GET["otazka1"]) AND isset($_GET["otazka2"]) AND isset($_GET["otazka3"])) {
        $sent = 1;
        if ($_GET["otazka1"] == $a) {
            $skore ++;
        }
        if ($_GET["otazka2"] == $b) {
            $skore ++;
        }
        if ($_GET["otazka3"] == $c) {
            $skore ++;
        }
    }
    if ($sent == 1) {
        if ($skore == 0) {
            echo "<h1>0/3, to je hodně špatný výsledek.</h1><img src='https://pbs.twimg.com/media/FMBEsmCacAA7hxy.jpg'><br>";
        }
        else if ($skore == 1) {
            echo "<h1>1/3, mohlo to být lepší.</h1><img src='https://www.shutterstock.com/image-photo/photo-shocked-impressed-young-guy-600nw-2005289489.jpg'><br>";
        }
        else if ($skore == 2) {
            echo "<h1>2/3, to je už je dobrý výsledek.</h1><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYWgndfP5qdMKtjms46flc1_ZTkHjEyr_g7A&s'><br>";
        }
        else if ($skore == 3) {
            echo "<h1>3/3, skvělý výsledek.</h1><img src='https://media.istockphoto.com/id/1097766402/photo/young-handsome-man-over-isolated-background-very-happy-and-excited-doing-winner-gesture-with.jpg?s=612x612&w=0&k=20&c=rT9A295g6Jn7lz0klLG0gCLwyY9dTa3iEv0U5aDEHEQ='><br>";
        }
    }
?>

    <form>
        <label>Kolik prstů má na jedné ruce Mickey Mouse?</label><br>
        <input type="text" name="otazka1">
        <br><br>
        <label>Kolik měsíců má Mars?</label><br>
        <input type="text" name="otazka2">
        <br><br>
        <label>Kolik oken je ve třídě U41?</label><br>
        <input type="text" name="otazka3"><br>
        <button>Odeslat</button>
    </form>
</body>
</html>