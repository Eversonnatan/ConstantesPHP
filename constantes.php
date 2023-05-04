<?php

    class Biblioteca{
        const Nome = "GTK";
    }

class Aplicacao extends Biblioteca{

    const Ambiente = "Gomme Desktop";
    const Versao = "3.8";

    function _construct($Nome){
        echo parent::Nome   .self::Ambiente     .Self::Versao   .$Nome . "<br>";
    }

}

    echo Biblioteca::Nome   .Aplicacao::Ambiente   .Aplicacao::Versao .    "<br>";

    new Aplicacao('Dia');
    new Aplicacao('Gimp');



?>