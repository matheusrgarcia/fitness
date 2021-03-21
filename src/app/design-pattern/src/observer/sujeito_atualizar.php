<?php

class SujeitoAtualizar {
    
    public $listaObservadores = array();
    
    public function setNotificacao(){
        $this->notificarObservadores();
    }
	
    public function addObserver($observer){
        $this->listaObservadores[] = $observer;
    }
	
    public function notificarObservadores(){

        foreach($this->listaObservadores as $observer){
            $observer->atualizarDados();
        }
    }
	
}