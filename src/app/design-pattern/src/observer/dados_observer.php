<?php

class DadosObserver extends Observer{

    public function DadosObserver($sujeito){
        $this->subject = $sujeito;
        $this->subject->addObserver($this);
    }

   // @Override
    public function atualizarDados() {
        echo "Atualizando dados a partir de observer...";
    }
	
}

?>