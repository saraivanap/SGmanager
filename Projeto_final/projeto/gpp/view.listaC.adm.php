<?php
    include_once('config.php');

        $sql = "SELECT * FROM formulario.cliente ORDER BY id DESC";
  
    $result = $conexao->query($sql);
    
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=Bootstree, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SG manager</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
          <a class="py-2" href="view.GERportifolio.php" aria-label="Product">
            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
          </a>

        </nav>
      </header>

      <table class="table table-bordered table-hover" style="text-align: center;">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">ID_Cliente</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Razão Social</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Status</th>
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
        <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>$user_data[id]</td>";
                            echo "<td>$user_data[id_cliente]</td>";
                            echo "<td>$user_data[cnpj]</td>";
                            echo "<td>$user_data[razao_social]</td>";
                            echo "<td>$user_data[telefone]</td>";
                            echo "<td>$user_data[email]</td>";
                           

                            if($user_data['status_cliente'] == "Ativo"){
                               echo "<td class='text-success'>$user_data[status_cliente]</td>";
                               echo "<td>
                                <a class = 'btn btn-primary btn-sm' href='os.php?id=$user_data[id]'>
                                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-file-earmark-plus-fill' viewBox='0 0 16 16'>
                                    <path d='M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z'/>
                                  </svg>
                                </a>
                            </td>";
                            }else{
                              echo "<td class='text-danger'>$user_data[status_cliente]</td>";
                              echo "<td>
                              <a class = 'btn btn-secondary btn-sm' href='#'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-file-earmark-plus-fill' viewBox='0 0 16 16'>
                                  <path d='M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z'/>
                                </svg>
                              </a>
                          </td>";
                            }
                            
                        }
                    ?>
        </tbody>
      </table>
      </div>

      
  </body>


</html>