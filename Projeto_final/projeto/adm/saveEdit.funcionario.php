<?php

    include_once('config.php');

    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $id_funcionario = $_POST['id_funcionario'];
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $funcao = $_POST['funcao'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];

        $sqlUpdate = "UPDATE formulario.funcionario SET id_funcionario = '$id_funcionario', cpf='$cpf', nome='$nome', funcao='$funcao', telefone='$telefone', email='$email', endereco='$endereco',cidade='$cidade', bairro='$bairro',cep='$cep '
        WHERE id = '$id' ";

        $result = $conexao->query($sqlUpdate);

    }
    header('Location: view.listaP.adm.php');

?>