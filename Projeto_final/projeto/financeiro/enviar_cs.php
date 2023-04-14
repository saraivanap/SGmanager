<?php
   include_once('config.php');
   if(!empty($_GET['id'])){

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM formulario.cliente WHERE id = $id";
    
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){

      while($user_data = mysqli_fetch_assoc($result)){

        $razao_social =$user_data['razao_social'];

      }
    }else{
      header('Location: view.contrato-cliente.php');
    }
}
    if(isset($_FILES['arquivo'])){
        $arquivo = $_FILES['arquivo'];
        if($arquivo['error']){
            die("Falha ao enviar arquivo");
        }
            
        if($arquivo['size'] > 2097152){
            die("Arquivo muito grande! Max:2MB");
        }
            

        $pasta = "arquivos/";
        $nomeDoArquivo = $arquivo['name'];
        $novoNomedoArquivo = uniqid();
        $extensao= strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
        $cliente = $_POST['cliente'];

        if($extensao != "docx" && $extensao != "pdf"){
            die("Tipo de arquivo não aceito!");
        }
        $path = $pasta . $novoNomedoArquivo . "." . "$extensao";

        $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
        if($deu_certo){
            $conexao ->query ("INSERT INTO formulario.contrato_cliente (nome, data_upload, path, cliente) VALUES('$nomeDoArquivo', NOW(),'$path', '$cliente' )") or die ($conexao->error);
            echo "<br>";
            echo "<div class='alert alert-success'>
            <strong>Sucesso!</strong> Seu arquivo foi enviado!.
          </div>";
       
        }
        else{
            echo "<br>";
            echo "<div class='alert alert-danger'>
                    <strong>Algo deu errado!</strong> Falha ao enviar arquivo!.
                 </div>";
        }
    }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SG Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<style>
    *{
        margin: 0;
        padding: 0;

    }
    body{
        font-family: Arial, Helvetica, sans-serif;
        align-items: center;
        text-align: center;
    }
    .btn-primary{
        margin-left: 1%;
    }
    .bt:hover{
        color: blueviolet;
    }
    .box{
        background-color: rgb(54, 58, 63);
    }
    .aviso{
        color: white;
        font-size: 18px;
    }



</style>
<body>
    <header class="site-header sticky-top py-1 bg-dark text-white ">
            <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="view.financeiro.php" aria-label="Product">
                <img src="svg/icons8-back-arrow-96.png" width="40" height="40"  alt="">
            </a>
            </nav>
            
    </header>
    
       <div class="box">
        <form enctype="multipart/form-data" action="" method="POST">
            <br><br><br><br>

                <p><label class="aviso">Por favor, selecione um arquivo</label><br>
                    <input class="btn btn-outline-secondary" name="arquivo" type="file"></p>
                    <input type="text" id="cliente" name="cliente"  style="border-radius: 5px; outline: none; width: 25%; margin: 1px; border: none; letter-spacing: 2px; font-size: 16px; padding: 0 15px;" autocomplete="off" placeholder="Cliente" required value="<?php echo $razao_social?>"><br><br>
                    <button class="btn btn-primary" name="upload" type="submit">enviar arquivo</button>
                    <br><br><br><br>  
                         
            </form>
       </div>
       
       <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1" style="margin-top: 110px;">© 2023 SG manager</p>
            <ul class="list-inline">
            </ul>
        </footer>

</body>
</html>