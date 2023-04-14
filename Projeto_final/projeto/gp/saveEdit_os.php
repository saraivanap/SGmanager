<?php

    include_once('config.php');

    if(isset($_POST['update'])){
        
        $id = $_POST['id'];
        $num = $_POST['num'];
        $id_cliente = $_POST['id_cliente'];
        $razao_social = $_POST['cliente'];
        $cnpj = $_POST['cnpj'];
        $telefone = $_POST['telefone'];
        $endereco =$_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $cep =$_POST['cep'];
        $servico = $_POST['servico'];
        $descricao = $_POST['descricao'];
        $responsavel = $_POST['responsavel'];
        $valor = $_POST['valor'];
        $data_emissao = $_POST['data_emissao'];
        $status_os = $_POST['status_os'];
        $data_conclusao = $_POST['data_conclusao'];

        $sqlUpdate = "UPDATE formulario.relatorio SET Nº_OS='$num', id_cliente= '$id_cliente', cliente= '$razao_social', cnpj='$cnpj', telefone='$telefone', endereco='$endereco', bairro='$bairro', cidade='$cidade', cep='$cep', servico='$servico', descricao='$descricao', responsavel='$responsavel', valor='$valor', data_emissao='$data_emissao', status_os='$status_os', data_conclusao='$data_conclusao' 
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: relatorio_os.php');

?>