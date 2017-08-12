<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula PHP</title>
    </head>
    <body>      
        <?php
        include './celular.php';
        
        $iPhone6    = new Celular('iPhone 6', 'Apple', "4.5\"", '128 GB', '8 GB', 'R$ 1.999,00');
        $GalaxyS7  = new Celular('Galaxy S7', 'Samsung', "5.1\"", '128 GB', '4 GB', 'R$ 5.500,00');
        $MotoX = new Celular('Moto X  ', 'Motorola', "5.5\"", '64 GB', '8 GB', 'R$ 7.280,00');
        
        $iPhone6 -> ImprimeValor();
        $GalaxyS7 ->ImprimeValor();
        $MotoX ->ImprimeValor();
        
        ?>
    </body>
</html>
