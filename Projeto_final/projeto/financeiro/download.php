<?php

    if(isset($_GET['file']) and isset($_GET['nome']) and isset($_GET['tipo'])){
        $file = "../".$_GET['file'];
        $nome = $_GET['nome'];
        $tipo = $_GET['tipo'];

        function setHeaders($nome, $file, $tipo){
            header("content-disposition: attachment; filename={$nome}");
            header("content-type: application/{$tipo}");

            readfile($file);
        }

        setHeaders($nome, $file, $tipo);
    }