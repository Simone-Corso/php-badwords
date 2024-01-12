<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords-php</title>
</head>
<body>


<?php
//andrò a realizzare una variabile con un paragrafo di testo che desidero io

$testo = "Apple è la miglior azienda al mondo per la sua affidabilità nel mercato tecnologico.";

//stampare nello schermo il paragrafo e la sua lunghezza


echo $testo . "<br>";
echo "La sua lunghezza è:" . strlen($testo);


//Andrò a realizzare la parola censurata dal GET 

$parolaDaCensurare = isset($_GET ['parola']) ? $_GET['parola'] : 'Apple';



echo "Parola da censurare è: $parolaDaCensurare<br>" ;

//Richiamare la funzione che ho creato nel script.php 

$testoCensurato = Apple($testo, $parolaDaCensurare);

//Come dice nell'esercizio di stampare nuovamente con la parola censurata

echo "Paragrafo censurato è:" ;

echo $testpCensurato ;

echo "La lunghezza è : " . strlen($testoCensurato) ;


?>
    
</body>
</html>