<?php
session_start();

//zmiana koloru
if(!empty($_GET["col"])){
    $_SESSION['color']=$_GET["col"];
    $col=$_SESSION["color"];
    echo $_SESSION["color"];    
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body <?php $col=$_SESSION["color"]; if($col) echo "style='background-color: $col;'" ?>>
    <h1>Main</h1>
    <?php
    include "menu.php";
    ?>

<form action="./index.php" method="get">
<input type="color" name="col" id="test">
<input type="submit" value="submit">
</form>

    <?php
    //$_SESSION["session1"]=0;
    $_SESSION["session1"]++;
    echo $_SESSION["session1"] . "<br>"; 
    ?>

</body>
</html>