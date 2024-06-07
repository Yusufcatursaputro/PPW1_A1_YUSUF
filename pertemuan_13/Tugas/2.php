<?php
$data = array(
    array("Nama" => "Ali", "Usia" => 25),
    array("Nama" => "Budi", "Usia" => 18),
    array("Nama" => "Cici", "Usia" => 15)
);
    
foreach($data as $orang) {
    if ($orang["Usia"] > 18) {
        echo "Nama: " . $orang["Nama"] . ", Usia: " . $orang["Usia"] . " (Dewasa)<br>";
    } else {
        echo "Nama: " . $orang["Nama"] . ", Usia: " . $orang["Usia"] . "<br>";
    }
}