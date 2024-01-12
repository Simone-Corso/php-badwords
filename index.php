<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords-php</title>
</head>
<body>
<!--andrò a realizzare una variabile con un paragrafo di testo che desidero io.!-->
<?php

$testo = "Apple è la miglior azienda al mondo per la sua affidabilità nel mercato tecnologico.";

//stampare nello schermo il paragrafo e la sua lunghezza


echo $testo . "<br>";
echo "La sua lunghezza è:" . strlen($testo);


//Andrò a realizzare la parola censurata dal GET 

$parolaDaCensurare = isset($_GET ['Apple']) ? $_GET['Apple'] : '';

echo "Parola da censurare è: $parolaDaCensurare" ;


?>
    
</body>
</html>