<?php
    include_once('config.php');

    if(!empty($_GET['search'])){
        
        $data = $_GET['search'];
        $sql = "SELECT * FROM formulario.relatorio WHERE Nº_OS LIKE'%$data%' or responsavel LIKE '%$data%'
        ORDER BY Nº_OS DESC";
    }else{
        
        $sql = "SELECT * FROM formulario.relatorio ORDER BY Nº_OS DESC";
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
    
      <br>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nº_OS</th>
            <th scope="col">ID.Cliente</th>
            <th scope="col">Serviço</th>
            <th scope="col">Responsável</th>
            <th scope="col">Valor</th>
             <th scope="col">Data de Emissão</th>
             <th scope="col">Status da OS</th>
             <th scope="col">Data de Conclusão</th>
             <th scope="col">...</th>
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
                     if($user_data['status_os'] == "Finalizada"){
                      echo "<td class = 'text-success'>$user_data[status_os]</td>";
                      
                     }else{
                      echo "<td class = 'text-primary'>$user_data[status_os]</td>";
                     }
                     
                     if($user_data['data_conclusao'] == "0000-00-00"){
                          echo "<td>$user_data[data_conclusao]</td>";
                     }else{
                      ?>
                        <td><?php echo date("d/m/Y", strtotime($user_data['data_conclusao']));?></td>
                  <?php
 
                     }
                    echo "<td>
                            <a class = 'btn btn-primary btn-sm' href='editOS.php?id=$user_data[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='12' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                    <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                                </svg>
                            </a> 
                          </td>";
                      }
                  ?>
                </tbody>
                
    </body>

</html>
</html>