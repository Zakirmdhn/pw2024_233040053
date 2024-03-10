<?php
$binatang = ["😺","🐰","🐵","🐨","🐮","🐊"];
$Makanan = ["🍜","🍙","🍛","🧇","🍚"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body style="margin-bottom: 100px;">
    <h3>Daftar Binatang</h3>
    <ol>
        <?php for($i = 0; $i < count($binatang); $i++) { ?>
        <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ol>

    <h3>Daftar Makanan</h3>
    <ul>
        <?php for($i = 0; $i < count($Makanan); $i++) { ?>
        <li><?php echo $Makanan[$i];?></li>
        <?php } ?>
    </ul>

    <hr>

    <h3>Daftar Binatang</h3>
    <ol>
        <?php foreach ($binatang as $b) : ?>
            <li><?=  $b; ?></li>
        <?php endforeach ?>
    </ol>
    <hr>

    <h3>Daftar Makanan</h3>
    <ol>
        <?php foreach ($Makanan as $M) : ?>
            <li><?=  $M; ?></li>
        <?php endforeach ?>
    </ol>


</body>
</html>