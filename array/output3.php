<?php

// $nama = array("Nama" => "Satria <br>", "Kelas" => "XI RPL 1");

$a = [
    ["Satria", "XI RPL 1"],
    ["Arsyi", "XI RPL 2"],
    ["Dhika", "XI RPL 3"],
    ["Evan", "XI RPL 4"],
    ["Fabian", "XI RPL 5"],
    ["Irfan", "XI RPL 6"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($a as $b): ?>
        <p>Nama <b><?= $b[0] ?></b> Kelas <b><?= $b[1] ?></b></p>
    <?php endforeach; ?>
</body>
</html>