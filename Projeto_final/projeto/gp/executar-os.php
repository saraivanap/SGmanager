<?php
    include_once('config.php');

    if(!empty($_GET['search'])){
        
        $data = $_GET['search'];
        $sql = "SELECT * FROM formulario.ordem_de_servico WHERE Nº_OS LIKE'%$data%' or responsavel LIKE '%$data%'
        ORDER BY Nº_OS DESC";
    }else{
        
        $sql = "SELECT * FROM formulario.ordem_de_servico ORDER BY Nº_OS DESC";
    }
    
    $result = $conexao->query($sql);
    
?>

<!doctype html>
<html lang="pt">
    <div>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </div>
    <head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=Bootstree, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SG manager</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <style>
        body{
            text-align: center;
        }
    .py-2{
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

<header class="site-header sticky-top py-1 bg-dark text-white ">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
          <a class="py-2" href="view.GERprojeto.php" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
          
        </a>
        <h4 style="margin-right: 40%">Ordens de Serviço</h4>

        </nav>
      </header>
      
    <body>

    <br>
    
      <table class="table table-bordered table-hover">
        <br>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nº_OS</th>
            <th scope="col">ID.Cliente</th>
            <th scope="col">Serviço</th>
            <th scope="col">Responsável</th>
            <th scope="col">Valor</th>
             <th scope="col">Data de Emissão</th>
          </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>$user_data[id]</td>";
                    echo "<td>$user_data[Nº_OS]</td>";
                    echo "<td>$user_data[id_cliente]</td>";
                    echo "<td>$user_data[servico]</td>";
                    echo "<td>$user_data[responsavel]</td>";
                    echo "<td>$user_data[valor]</td>";
            ?>
                    <td><?php echo date("d/m/Y", strtotime($user_data['data_emissao']));?></td>
                  <?php
                    echo "<td>
                          <a class = 'btn btn-primary btn-sm' href='dadosOS.php?id=$user_data[id]'>
                          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16'>
                            <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z'/>
                            <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z'/>
                          </svg>
                          </a> 
                        </td>";
                            
                        }
                    ?>
                </tbody>
    </body>

</html>
</html>