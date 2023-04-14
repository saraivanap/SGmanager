<?php

    include_once('config.php');

    if(isset($_POST['update'])){
        
        $id = $_POST['id'];
        $cnpj = $_POST['cnpj'];
        $fornecedor = $_POST['fornecedor'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $obs = $_POST['obs'];
        $status = $_POST['status'];

        $sqlUpdate = "UPDATE formulario.fornecedor SET cnpj='$cnpj', fornecedor='$fornecedor', telefone='$telefone', email='$email', cidade='$cidade', endereco='$endereco ', bairro='$bairro ',cep='$cep ', obs ='$obs', status_fornecedor='$status'
        WHERE id = '$id' ";

        $result = $conexao->query($sqlUpdate);

    }
    header('Location: view.listaF.adm.php');

?>