<?php
session_start();
if (isset($_SESSION['favorit']) && count($_SESSION['favorit']) > 0) {
    $file = fopen("favorit.txt", "w");
    foreach ($_SESSION['favorit'] as $favorit) {
        fwrite($file, $favorit . PHP_EOL);
    }
    fclose($file);
    echo "Favorit Di simpan.txt";
} else {
    echo "Favorit TIdak tersimpan";
}
?>
