<?php
    include_once('config.php');
    $sql_querry = $conexao->query("SELECT * FROM formulario.contrato_fornecedor") or die($conexao->error);
    
?>
<!DOCTYPE HTML>
<html lang="pt">

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=Bootstree, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SG manager</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>
    .bt:hover{
      color: blueviolet;
      text-decoration: none;
    }.py-2{
      margin-top: 15px;
      color: white;
    }.py-2:hover{
      color: white;
    }
    h4{
      font-size: 20px;
      margin-top: 25px;
    }
    .site-header{
      height: 80px;
    }
  </style>
</head>

<header class="site-header sticky-top py-1 bg-dark text-white ">
        <nav class="container d-flex flex-column flex-md-row justify-content-between bg-dark">
         <a style="color:white;" class="py-2" href="view.diretor.php" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>tela inicial</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
          
        </a>
          <a style="border: none" class="btn btn-secondary bg-dark" href="view.listaC.php">Clientes</a>
          <a style="border: none" class="btn btn-secondary bg-dark" href="view.listaF.php">Fornecedores</a>
          <a style="border: none" class="btn btn-secondary bg-dark" href="index.php">Dashboard</a>
          <a style="border: none" class="btn btn-secondary bg-dark" href="relatorio_os.php">Relatórios</a>
          <a style="border: none" class="btn btn-secondary bg-dark" href="view.diretor.php">Voltar</a>
        </nav>
      </header>
      
<body style="text-align: center;">
    
    <br>
      <table class="table table-bordered table-Light .table-striped">
        <thead>
          <tr>
                <th scope="col">ID</th>
                <th scope="col">Arquivo</th>
                <th scope="col">Data de envio</th>
                <th scope="col">Ver Documento</th>

          </tr>
        </thead>
        <tbody>
        <?php
                while($arquivo = $sql_querry->fetch_assoc()){
                ?> 
                <tr>
                <td><?php echo $arquivo['id'];?></td>
                    <td><?php echo $arquivo['nome'];?></td>
                    <td><?php echo date("d/m/Y", strtotime($arquivo['data_upload']));?></td>
                    <td><a class="bt" target="_blank" href="<?php echo $arquivo['path'];?>"><?php echo $arquivo['nome'];?></a></td>
                </tr>
                <?php
                }
                ?>
        </tbody>
      </table>
      </div>

      
  </body>
</html>