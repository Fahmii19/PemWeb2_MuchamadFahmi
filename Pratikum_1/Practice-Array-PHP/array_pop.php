<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Pop PHP</title>
</head>

<body>

    <p>Penjelasan Array POP : Menghapus Value Terakhir</p>

    <?php

    $anggota = ["Fahmi", "Asnur", "Angga"];
    array_pop($anggota);
    foreach ($anggota as $agt) {
        echo $agt . '<br/>';
    }

    ?>

</body>

</html>