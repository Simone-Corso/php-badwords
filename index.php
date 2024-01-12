<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords-php</title>
</head>
<body>


<style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 700px;
        }

        .apple {
            text-align: center;
        }
    </style>

<?php include 'script.php'; ?>

<div class="apple">
<?php



//andrò a realizzare una variabile con un paragrafo di testo che desidero io
$testo = "Apple è la miglior azienda al mondo per la sua affidabilità nel mercato tecnologico.";

//stampare nello schermo il paragrafo e la sua lunghezza
echo $testo . "<br>";
echo "La sua lunghezza è:" . strlen($testo) . "<br>";

//Andrò a realizzare la parola censurata dal GET 
$parolaDaCensurare = isset($_GET['parola']) ? $_GET['parola'] : 'Apple';
echo "Parola da censurare è: $parolaDaCensurare<br>";

//Richiamare la funzione che ho creato nel script.php 
$testoCensurato = censuraParola($testo, $parolaDaCensurare);

//Come dice nell'esercizio di stampare nuovamente con la parola censurata
echo "Paragrafo censurato è:" . $testoCensurato . "<br>";
echo "La lunghezza è: " . strlen($testoCensurato) . "<br>";
?>
</div>

    
</body>
</html>
