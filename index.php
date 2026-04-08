<?php
    echo "1. <br>";
    for ($i=1;$i<=100;$i++) {
        echo $i." ";
    }

    echo "<br><br>2. <br>";
    for ($i=1;$i<=100;$i++) {
        if ($i < 50){
            echo $i." ";
        }
        else {
            echo "hodne ";
        }
    }

    echo "<br><br>3. <br>";
    for ($i=1;$i<=100;$i++) {
        if ($i%2==0){
            echo $i." ";
        }
    }

    echo "<br><br>4. <br>";
    for ($i=1;$i<=100;$i++) {
        if ($i%3==0){
            echo $i." ";
        }
    }

    echo "<br><br>5. <br>";
    for ($i=1;$i<=100;$i++) {
        if ($i%3==0 & $i%5==0){
            echo "BUM PRASK ";
        }
        else if ($i%3==0){
            echo "BUM ";
        }
        else if ($i%3==0){
            echo "BUM ";
        }
        else{
            echo $i." ";
        }
    }

    echo "<br><br>6. <br>";
    $planety = ["Merkur", "Venuse", "Zeme", "Mars", "Jupiter", "Saturn", "Uran", "Neptun"];
    foreach ($planety as $planeta) {
        echo $planeta." ";
    }

    echo "<br><br>7. <br>";
    foreach ($planety as $planeta) {
        if (strlen($planeta) > 5) {
            echo strtoupper($planeta)." ";
        }
        else {
            echo $planeta." ";
        }
    }

    echo "<br><br>8. <br>";
    $jmeno = "Max";
    $vek = 17;
    echo "Ahoj, jmenuji se ".$jmeno." a je mi ".$vek." let.";

    echo "<br><br>9. <br>";
    $x = rand(1,6);
    echo $x;

    echo "<br><br>10. <br>";
    $podmet = ["Jarda", "Blanka", "Pan Špér", "Procházka", "Lakomice"];
    $prisudek = ["gamblí", "hází", "prolétává", "mlátí", "smaží"];
    $predmet = ["organickou chemii", "břicho", "šálu", "tři peřiny", "rozvrh"];
    $a = rand(0,4); $b = rand(0,4); $c = rand(0,4); 
    echo $podmet[$a]." ".$prisudek[$b]." ".$predmet[$c].".";
?>