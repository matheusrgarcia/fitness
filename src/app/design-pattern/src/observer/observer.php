<?php

abstract class Observer {
    
    protected $subject;
    
    abstract protected function atualizarDados();
}

?>