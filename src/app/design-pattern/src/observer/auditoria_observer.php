<?php

class AuditoriaObserver extends Observer{

    public function AuditoriaObserver($sujeito){
        $this->subject = $sujeito;
        $this->subject->addObserver($this);
    }

    //@Override
    public function atualizarDados() {
        echo "Atualizando auditoria a partir de observer...";

    }

}

?>