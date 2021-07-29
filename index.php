<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skaiciuotuvas - 1 uzduotis</title>
</head>
<body>
<!-- 1. Užduotis "Skaičiuotuvas"

Sukurti skaičiuotuvą. Skaičiuotuve įvedami du skaičiai į du skirtingus input.
Aritmetinis veiksmas perduodamas per GET. Pvz.: sukuriamas trečias input, jei tame input yra + ženklas,
jis perduodamas per GET, ir PHP kode if tikrina, koks aritmetinis veiksmas buvo perduotas.
Rezultatas išvedamas į div. -->

<form action="skaiciuotuvas_action.php" method="get">
        <input type="text" value="1" name="skaicius1" />
        <input type="text" value="Irasykite aritmetini zenkla" name="zenklas" />
        <input type="text" value="3" name="skaicius2" />
        <button type="submit">Patvirtinti</button>
    </form>



</body>
</html>