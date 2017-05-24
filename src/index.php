<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testi</title>
    </head>
    <body>
        <?php
        require 'Auto.php';
        // put your code here
        $auto = new Auto();
        echo $auto->getSpeed() ."<br>";
        $auto->Accelerate();
        echo $auto->getSpeed();
        ?>
    </body>
</html>
