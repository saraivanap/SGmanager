<?php

    if(!empty($_GET['id'])){

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM formulario.ordem_de_servico  WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){
                $id = $user_data['id'];
                $Nº_OS = $user_data['Nº_OS'];
                $id_cliente = $user_data['id_cliente'];
                $razao_social = $user_data['cliente'];
                $cnpj = $user_data['cnpj'];
                $telefone = $user_data['fone'];
                $endereco = $user_data['endereco'];
                $bairro = $user_data['bairro'];
                $cidade = $user_data['cidade'];
                $cep = $user_data['cep'];
                $servico = $user_data['servico'];
                $responsavel = $user_data['responsavel'];
                $descricao = $user_data['descricao'];
                $valor = $user_data['valor'];
                $data_emissao = $user_data['data_emissao'];
                
            }
            
        }
        else{
            header('Location: view.listaC.adm.php');
        }

    }

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar OS</title>
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $("#cnpj").mask("00.000.000/0000-00");
                $("#telefone").mask("(00)0-0000-0000");
                $("#cep").mask("00000-000");
                $("#num").mask("000/00");
            
            })
        </script>
</head>
<style>
    
    *{
        margin: 0;
        padding: 0;
    }

    .box{
        border: 1px solid #454f58;
        margin-left: 60px;
        width: 90%;
        height: 90px;
        align-items: center;
        margin-top: 30px;
        border-radius: 10px;        
    }
    body{
        align-items: center;
        position: relatiave;
        font-family: Arial, Helvetica, sans-serif, 'Arial Narrow', Arial, sans-serif;

    }
    #bx{
        height: 350px;
    }
    #bx-bx{
        left: 60%;
        height: 60%;
        text-align: center;

    }
    #descricao{
        width: 45%;
        margin: 10px;
        margin-top: 50px;
        height: 22px;
    }

    .text{
        margin-left: 9px;
    }
    .box label{
        font-size: 20px;
        flex-direction: column;
        margin: 30px;
        align-items: center;
        
    }
    fieldset{
        background-color: rgb(45, 47, 51);
        width: 100%;
        height: 80px;
        color: white;
        text-align: center;
        font-size: 26PX;
        align-items: center;
    
    }
    #servico{
        width: 41%;
        height: 20px;
    }
    #valor{
        width: 18%;
        height: 20px;
    }
    #responsavel{
        width: 20%;
        height: 20px;
    }
    #cliente{
        width: 30%;
        height: 20px;
    }
    #cnpj{
        width: 18%;
        height: 20px;
    }
    #cod_cliente{
        height: 20px;
        width: 15%;
    }
    #endereco{
        width: 30%;
        height: 20px;
    }
    #bairro{
        height: 20px;
        width: 30%;
    }
    #cep{
        width: 16%;
        height: 20px;
    }
    #cidade{
        width: 35%;
        height: 20px;
    }
    #telefone{
        height: 20px;
        width: 20%;
    }
    #data{
        height: 20px;
        width: 20%;
        font-size: 18px;
        outline: none;
        border-radius: 5px;
        border: 1px solid gray;
    }
    .input{
        font-size: 18px;
        text-decoration: none;
        border-style:unset;
        box-shadow: 0px 0px 2px 1px #9c9c9c;
        border-radius: 5px;
        outline: none;
        letter-spacing: 2px;
    }
    #gerar{
        width: 50%;
        padding: 10px;
        margin-left: 25%;
        font-size: 16px;
        background: rgb(72, 122, 223);
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }
    #gerar:hover{
        background: rgb(45, 84, 163);
    }
    .assinatura{
        margin-left: 180px;
        border-top: 1px solid black;
        text-align: center;
        width: 70%;
        margin-top: 70px;
    }


</style>
<header class="site-header sticky-top py-1 bg-dark text-white ">
        <nav class="container d-flex flex-column flex-md-row justify-content-between bg-dark">
         <a style="color:white;" class="py-2" href="view.GERportifolio.php" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>tela inicial</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
          
        </a>
        </nav>
      </header>
<body>
    <div class="container">
        <fieldset><br>ORDEM DE SERVIÇO</fieldset>
            <div class="box" id="bx-bx">
            <br>
            <label >EMPRESA X</label><br><br>
            <label >Cnpj: 00.000.000/0000-00</label>
            <label >End. da empresa </label>
            <label >Cep da empresa</label>
            </div>
        <form action="os.php" method="POST">
    
            <div class="box" id="bx">

            <br>
            <label >Nº_OS</label>
            <input type="text" id="num" name="num" required class="input" autocomplete="off" placeholder="000/00" value="<?php echo $Nº_OS?>">

            <label >Data de emissão</label>
            <input type="date" id="data" name="data_emissao" required value="<?php echo $data_emissao?>"><br><br><br>

            <label for="cliente">cliente:</label>
            <input type="text" id="cliente" name="cliente" class="input" autocomplete="off" value="<?php echo $razao_social?>">

            <label for="cnpj">cnpj:</label>
            <input type="text" id="cnpj" name="cnpj" class="input" autocomplete="off" placeholder="00.000.000/0000-00" value="<?php echo $cnpj?>">

            <label for="id">Id.cliente:</label>
            <input type="text" id="id" name="id" class="input" autocomplete="off" value="<?php echo $id_cliente?>"><br><br>

            <label for="endereco">endereco:</label>
            <input type="text" id="endereco" name="endereco" class="input" autocomplete="off" value="<?php echo $endereco?>">

            <label for="telefone">fone:</label>
            <input type="tel" id="telefone" name="telefone" class="input" autocomplete="off" placeholder="(00)0-0000-0000" value="<?php echo $telefone?>">

            <label for="cep">cep:</label>
            <input type="text" id="cep" name="cep" class="input"autocomplete="off" placeholder="00000-000"value="<?php echo $cep?>"><br><br>

            <label for="cidade">cidade:</label>
            <input type="text" id="cidade" name="cidade" class="input" autocomplete="off" value="<?php echo $cidade?>">

            <label for="bairro">bairro:</label>
            <input type="text" id="bairro" name="bairro" class="input" autocomplete="off" value="<?php echo $bairro?>"><br>

            <label for="descricao">descricao do pedido:</label>
            <input type="text" id="descricao" name="descricao" class="input" autocomplete="off" value="<?php echo $descricao?>">

            <label for="valor" id="v">Valor:</label>
            <input type="text" id="valor" name="valor" class="input" autocomplete="off" placeholder="R$ 00,00" value="<?php echo $valor?>"><br><br>

            <label for="servico">Serviço a executar:</label>
            <input type="text" id="servico" name="servico" class="input" autocomplete="off" value="<?php echo $servico?>">

            <label for="responsavel">Responsável:</label>
            <input type="text" id="responsavel" name="responsavel" class="input" autocomplete="off" value="<?php echo $responsavel?>">
            <br><br><br>
            <!-- <div class="assinatura">Assinatura</div> -->
        </div>

        </form>
        
    </div>
</body>
<script>
        var search = document.getElementById('pesquisar');

        search.addEventListener("keydown", function(event){
            if(event.key==="Enter"){
                searchData();
            }
        });
        function searchData(){
            window.location = 'ver-os.php?search='+search.value;
        }
    </script>
</html>