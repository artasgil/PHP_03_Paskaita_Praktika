<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
3. Sukurkite du input laukelius. Vienas -  vardas, kitas - slaptažodis. Susigalvokite vardą ir slaptažodį. Pvz. vardas - "admin",
slaptažodis - "123456". Jei sugalvota kombinacija sutampa su tuo, kas įvesta į input laukelius, išvedamas pranešimas - "prisijungėte sėkmingai", kitu atveju - "Įvesti duomenys neteisingi".
<form action="slaptazodis_action.php" method="post">
        <input type="text" value="Prisijungimo vardas" name="prisijungimas" />
        <input type="password" value="Slaptazodis" name="slaptazodis" />
        <button type="submit">Patvirtinti</button>
    </form>
</body>
</html>