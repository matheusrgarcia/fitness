<?php

class Contexto {

    private $strategy;

    public function Contexto($crud){
        $this->strategy = $crud;
    }

    public function executaStrategy($dados){
        return $this->strategy->acao($dados);
    }
	
}
?>