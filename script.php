<!-- dovrò realizzare una function per censurare la parola !-->

<?php
// dovrò realizzare una function per censurare la parola

function censuraParola($testo, $parolaDaCensurare) {
    $testoCensurato = str_ireplace($parolaDaCensurare, '***', $testo);
    return $testoCensurato;
}
?>

