<?php

class Read implements Crud{

    public function acao($dados) {
        return "Listar {$dados}";
    }
	
}

?>