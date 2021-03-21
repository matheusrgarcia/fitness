<?php

    include 'conexao.php';

    class singleton {

        function main(){

                echo "Primeira chamada: ";
                $conexao = new conexao;
                $conexao->getInstance();
                
                echo "<br>";
                
                echo "Segunda chamada: ";

                $conexao2 = new conexao;
                $conexao2->getInstance();

        }

    }
