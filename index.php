<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <img src="php/kuvia/kuva1.jpeg">
    <img src="php/kuvia/kuva2.jpeg">
    <img src="php/kuvia/kuva3.jpeg">
    <img src="php/kuvia/kuva4.jpeg">
    
    <?php

        $kuva[] = "kuva1.jpeng";
        $kuva[] = "kuva2.jpeng";
        $kuva[] = "kuva3.jpeng";
        $kuva[] = "kuva4.jpeng";

        echo $kuva[rand(0,3)];


        ?>
    
</body>
</html>


