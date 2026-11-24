<?php
require_once "hewan.php";

$kucing = new Kucing();
$kucing->setNama("Cimeng");
$kucing->setUmur(2);

$anjing = new Anjing();
$anjing->setNama("Muso");
$anjing->setUmur(3);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Hewan</title>
</head>
<body>
    <h2>Data Hewan</h2>

    <p>
        Nama: <?php echo $kucing->getNama(); ?><br>
        Umur: <?php echo $kucing->getUmur(); ?> tahun<br>
        Jenis: <?php echo $kucing->getJenis(); ?><br>
        Suara: <?php echo $kucing->getSuara(); ?>
    </p>

    <p>
        Nama: <?php echo $anjing->getNama(); ?><br>
        Umur: <?php echo $anjing->getUmur(); ?> tahun<br>
        Jenis: <?php echo $anjing->getJenis(); ?><br>
        Suara: <?php echo $anjing->getSuara(); ?>
    </p>
</body>
</html>