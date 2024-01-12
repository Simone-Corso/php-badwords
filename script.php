<!-- dovrò realizzare una function per censurare la parola !-->

<?php

function censuraParola($testo, $parolaDaCensurare) {
    $testoCensurato = str_ireplace($parolaDaCensurare, '***', $testo);
    return $testoCensurato;
}

?>

