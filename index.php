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
        $kuva[] = "kuva1.jpeg";
        $kuva[] = "kuva2.jpeg";
        $kuva[] = "kuva3.jpeg";
        $kuva[] = "kuva4.jpeg";

        echo $kuva[rand(0,3)];
        ?>
    
</body>
</html>


