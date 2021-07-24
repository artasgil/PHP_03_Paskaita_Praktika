<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$narsykle = $_SERVER['HTTP_USER_AGENT'];
$mozilla = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Google_Chrome_icon_%282011%29.svg/512px-Google_Chrome_icon_%282011%29.svg.png" />';
$safari = '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Safari_browser_logo.svg/1028px-Safari_browser_logo.svg.png" />';

if(stripos($narsykle, "Mozilla/5.0") !==false ) {
 echo $mozilla;
} else if(stripos($narsykle, "Safari") !==false ){
echo $safari;
}


?>





</body>
</html>