<?php

$buahbuahan = ['apel', 'mangga', 'nanas', 'durian'];

foreach ($buahbuahan as $key => $buah) {
    echo "Buah Ke-" . ($key + 1) . ' adalah ' . $buah . "<br>";
}

?>