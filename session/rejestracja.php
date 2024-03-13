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
<h1>Rejestracja</h1>

<?php
include "menu.php";
?>

<form action="" method="post">
    <input type="text" name="login" id="login">
    <input type="text" name="password" id="password">
    <input type="submit" value="Dodaj">

</form>


<?php
    $_SESSION["session1"]++;
    echo $_SESSION["session1"] . "<br>";
?>
<?php
    if(!empty($_POST["login"]) && !empty($pass=$_POST["password"])){ 
    $login = $_POST["login"];

    ######   Szyfrowanie hasła   ######
    function szyfruj_haslo($pass){
        return md5($pass);
    }
    $zaszyfrowane = szyfruj_haslo($pass);


    $host = 'localhost';
    $dbuser='root';
    $dbpass='';
    $db='users';

    $conn=mysqli_connect($host, $dbuser, $dbpass, $db);

    if(!$conn){
        echo "blad polaczenia";
    }
    
    $sql = "INSERT INTO users (`login`, `pass`, uprawnienia) VALUES ('$login', '$zaszyfrowane', 'user')";

    if(mysqli_query($conn, $sql)){
        echo "zapisano";
    } else{
        echo "nie zapisano";
    }
    
    mysqli_close($conn);
    
    }
##############################################################################################################################################################
    if(false) echo 1; elseif(!false) echo 2;
?>

</body>
</html>