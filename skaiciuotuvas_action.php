
<?php 

if(isset($_GET["skaicius1"]) && !empty($_GET["skaicius1"]) && isset($_GET["zenklas"]) && !empty($_GET["zenklas"]) && isset($_GET["skaicius2"]) && !empty($_GET["skaicius2"])) {

    $pirmas = $_GET["skaicius1"];
    $antras = $_GET["skaicius2"];
    $zenklas = $_GET["zenklas"];
    $suma = 0;

    if ($zenklas == "+") {
        $suma =  $pirmas + $antras;
        $suma;
    } else if ($zenklas == "-") {
        $suma = $pirmas - $antras;
        $suma;
    } else if ($zenklas == "/") {
        $suma = $pirmas / $antras;
        $suma;
    } else if ($zenklas == "*") {
        $suma = $pirmas * $antras;
        $suma;

    } else {
        $neteisingasZenklas = "Neteisingai ivestas aritmetinis zenklas";
        echo "<input class='neaktyvus' disabled='true' value='".$neteisingasZenklas."' />";

    }

}


?>
<input class='neaktyvus' disabled='true' value='<?php echo $suma; ?>' />
