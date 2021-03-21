<?php

class PerfilFactory {

    public function gerarPerfil($perfil){

        if($perfil == "" || $perfil == null){
            return null;
        }

        if(strtoupper($perfil) == "ADMIN"){
            return new Admin;
        } elseif(strtoupper($perfil) == "USUARIO"){
            return new Usuario;
        } elseif(strtoupper($perfil) == "GERENTE"){
            return new Gerente;
        }

        return null;
    }

}
?>
