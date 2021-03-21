<?php

class CdPlayer implements TocadorAvancado{

    public function tocarVinil($nomeDisco) {
        // Nada a ser feito
    }

    public function tocarCd($nomeDisco) {
        echo "Tocando um CD de nome ".$nomeDisco;
    }

}
