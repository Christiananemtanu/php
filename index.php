<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <img src="php/kuva1.jpeg">
    <img src="php/kuva2.jpeg">
    <img src="php/kuva3.jpeg">
    <img src="php/kuva4.jpeg">
</head>
<body>
    <?php

        $imagesDir = 'php/kuvia/';
        $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        $randomImage = $images[array_rand($images)];
    
        ?>
    
</body>
</html>


$kuva[] = ;
        $kuva[] = ;
        $kuva[] = ;
        $kuva[] = ;

        echo $kuva[rand(0,3)];


