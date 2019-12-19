<!DOCTYPE html>
<html>
    <head>
        <title> Steen, Papier, Schaar </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="GET" id="box">
<?php
$ai = array("Steen", "Papier", "Schaar");
if(isset($_GET["p1"])) {
echo "";}
else {
?>
            <h1>Player 1</h1>
                <select name="p1" id="select1">
                    <option value="steen">Steen</option>
                    <option value="papier">Papier</option>
                    <option value="schaar">Schaar</option>
                </select>
                <input type="submit" value="submit" name="submit1">
<?php
}
$random = array_rand ($ai);
$one = $_GET["p1"];
foreach ($ai as $key => $value) {
 $keuzen = $value;
}
if ($random === 0) {
    if ($one === "steen") {
        echo "<h1>Speler kiest " . $one . "</h1>";
        echo "<h1>Computer kiest " . $random . "</h1>";
        echo "<h1>Gelijk spel!</h1>";
    }if ($one === "papier") {
        echo "<h1>Speler kiest " . $one . "</h1>";
        echo "<h1>Computer kiest " . $random . "</h1>";
        echo "<h1>Gewonnen!</h1>";
    }if ($one === "schaar") {
        echo "<h1>Speler kiest " . $one . "</h1>";
        echo "<h1>Computer kiest " . $random . "</h1>";
        echo "<h1>Verloren!</h1>";
    }
}if ($random === 1) {
    if ($one === "steen") {
        echo "<h1>Speler kiest " . $one . "</h1>";
        echo "<h1>Computer kiest " . $random . "</h1>";
        echo "<h1>Verloren!</h1>";
    }if ($one === "papier") {
        echo "<h1>Speler kiest " . $one . "</h1>";
        echo "<h1>Computer kiest " . $random . "</h1>";
        echo "<h1>Gelijk spel!</h1>";
    }if ($one === "schaar") {
        echo "<h1>Speler kiest " . $one . "</h1>";
        echo "<h1>Computer kiest " . $random . "</h1>";
        echo "<h1>Gewonnen!</h1>";
    } 
}if ($random === 2) {
    if ($one === "steen") {
        echo "<h1>Speler kiest " . $one . "</h1>";
        echo "<h1>Computer kiest " . $random . "</h1>";
        echo "<h1>Gewonnen!</h1>";
    }if ($one === "papier") {
        echo "<h1>Speler kiest " . $one . "</h1>";
        echo "<h1>Computer kiest " . $random . "</h1>";
        echo "<h1>Verloren!</h1>";
    }if ($one === "schaar") {
        echo "<h1>Speler kiest " . $one . "</h1>";
        echo "<h1>Computer kiest " . $random . "</h1>";
        echo "<h1>Gelijk spel!</h1>";
    }  
}
?>
    </body>
</html>