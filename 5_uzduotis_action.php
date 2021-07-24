<?php



if ((isset($_POST["spalva"]) && !empty($_POST["spalva"]))) {

    $spalva = $_POST["spalva"];

    if ($spalva == "juoda") {
        $rezultatoKlase = "black";
    } else if ($spalva == "raudona") {
        $rezultatoKlase = "red";
    } else if ($spalva == "melyna") {
        $rezultatoKlase = "blue";
    } else if ($spalva != "juoda" || $spalva != "raudona" || $spalva != "melyna") {
    $rezultatoKlase = $spalva;
}
}


?>

<style>
    body {
        background-color: <?php echo $rezultatoKlase ?>;
    }
</style>