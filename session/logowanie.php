<?php
session_start();
$col=$_SESSION["color"];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body <?php echo "style='background-color: $col;'"?>>
<h1>Logowanie</h1>
<?php
include "menu.php";
?>

<?php
    $_SESSION["session1"]++;
    echo $_SESSION["session1"] . "<br>";
?>
</body>
</html>