<?php

    include_once('config.php');

    if(isset($_POST['atualizar'])){
        $id = $_POST['id'];
        $cnpj = $_POST['cnpj'];
        $razao_social = $_POST['razaoSocial'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
        $obs = $_POST['obs'];
        $status = $_POST['status'];
        

        $sqlUpdate = "UPDATE formulario.cliente SET cnpj='$cnpj', razao_social='$razao_social', telefone='$telefone', email='$email', rua='$rua',bairro='$bairro', cidade='$cidade', cep='$cep ', obs='$obs', status_cliente='$status'
        WHERE id = '$id' ";

        $result = $conexao->query($sqlUpdate);
        

    }
    
    header('Location: view.listaC.adm.php');

?>