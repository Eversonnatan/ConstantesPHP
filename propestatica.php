<?php

class Aplicacao{
    static $Quantidade;


    function _construct($Nome){
        self::$Quantidade++;
        $i = self::$Quantidade;
        echo "Nova Aplicação numero . $i: $Nome <br>";

    }
}

new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gumeric');
new Aplicacao('Abiord');
new Aplicacao('Evolution');

echo '<br> Quantidade de aplicações = ' .  Aplicacao::$Quantidade .  "<br>";








?>