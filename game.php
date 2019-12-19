<!DOCTYPE html>
<html>
    <head>
        <title> Steen, Papier, Schaar </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="GET" id="box">
<?php

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
if(isset($_GET["p1"])&&!isset($_GET["p2"])) {
?>
            <h1>Player 2</h1>
                <select name="p2" id="select2">
                    <option value="steen">Steen</option>
                    <option value="papier">Papier</option>
                    <option value="schaar">Schaar</option>
                </select> 
                <input type="submit" value="submit" name="submit2">
                <input type="hidden" name="p1" value="<?php echo $_GET['p1']; ?>">
<?php  
}
?>
        </form>
<?php    
    $one = $_GET["p1"];
    $two = $_GET["p2"];
            if(isset($_GET["p1"])&&isset($_GET["p2"])) {
            if($one=="steen" && $two=="papier" || 
            $one=="schaar" && $two=="steen" ||
            $one=="papier" && $two=="schaar") {
                    echo "<h1 id='result'>Player 2 Wins!</h1>";
                }
            if($two=="steen" && $one=="papier" || 
            $two=="schaar" && $one=="steen" ||
            $two=="papier" && $one=="schaar") {
                    echo "<h1 id='result'>Player 1 Wins!</h1>";
                }
            if($two=="steen" && $one=="steen" || 
            $two=="schaar" && $one=="schaar" ||
            $two=="papier" && $one=="papier") {
                    echo "<h1 id='result'>Gelijk Spel!</h1>";
                }
        }
?>
    </body>
</html>