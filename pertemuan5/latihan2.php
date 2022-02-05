<?php 
// Pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,77,100,299,0,8];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear: both;}
    </style> 
</head>
<body>

<!-- Cara Pertama Menampilkan Array di FrontEnd -->
<?php for($i=0; $i < count($angka); $i++ ) { ?> 
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?> 

<div class="clear"></div>

<!-- Cara Kedua -->
<?php foreach($angka as $angke) : ?>
    <div class="kotak"><?php echo $angke; ?></div> 
<?php endforeach ?>

</body>
</html> 