<?php

class Cesta {

    private $itens;

    #adiciona itens na cesta
    function AdcionaItem(Produto $item){
        $this->itens[] = $item;
    }

    #exibe a lista de produtos
    function ExibeLista(){
        foreach ($this->itens as $item){
            $item_>ImprimeEtiqueta();
        }
    }

    #calcula o valor total daa cesta
    function CalculaTotal(){
        $total = 0;
        foreach ($this->itens as $item){

            $total = 0;
            foreach ($this->itens as $item){
                
                $total += $item->Preco;
            }

            return 'Total: R$ ' . $total . '<br>';
        }
    }



}



?>