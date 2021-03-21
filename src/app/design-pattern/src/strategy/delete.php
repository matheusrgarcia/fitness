<?php

class Delete implements Crud{

    public function acao($dados) {
        return "Excluir {$dados}";
    }
	
}
?>