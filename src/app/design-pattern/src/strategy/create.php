<?php

class Create implements Crud{

    public function acao($dados) {
        return "Adicionar {$dados}";
    }
	
}
?>