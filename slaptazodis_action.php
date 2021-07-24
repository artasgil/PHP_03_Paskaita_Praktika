<?php 
if(isset($_POST["prisijungimas"]) && !empty($_POST["prisijungimas"]) && isset($_POST["slaptazodis"]) && !empty($_POST["slaptazodis"])) {


$prisijungimas = $_POST["prisijungimas"];
$slaptazodis = $_POST["slaptazodis"];

if($prisijungimas== "Admin" && $slaptazodis == "123456") {
    header('Location: mano_paskyra.php');
} else {
    header('Location: 404.php');
}



}

?>