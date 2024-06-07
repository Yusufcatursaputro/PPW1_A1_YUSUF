<?php
$data = array("Apel", "Jeruk", "Pisang", "Mangga");

foreach($data as $buah) {
    if ($buah == "Pisang") {
        echo "Buah favorit: $buah<br>";
    } else {
        echo "Buah: $buah<br>";
    }
}
?>