<?php
    include_once('config.php');

  if(!empty($_GET['search'])){
    $data = $_GET['search'];

    $get = "SELECT * FROM formulario.fornecedor WHERE id LIKE '%$data%' or id_fornecedor LIKE '%$data%' or fornecedor LIKE '%$data%' ORDER BY id DESC";

  }else{
    $get = "SELECT * FROM formulario.fornecedor ORDER BY id DESC";
    
  }
  $result = $conexao->query($get);
    
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
<style>
  .box-search{
    display: flex;
    justify-content: center;
    gap: .1%;
    padding: 10px;
    height: 55px;
  }
</style>

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

<body>
      <div class="box-search">
          <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
          <button class="btn btn-primary bt-sm" onclick="searchData()">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
          </button>
      </div>
      <table class="table table-bordered table-hover" style="text-align: center;">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">ID_Fornecedor</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Razão Social</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Status</th>
            <th scope="col">Observação</th>
          </tr>
        </thead>
        <tbody>
        <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>$user_data[id]</td>";
                            echo "<td>$user_data[id_fornecedor]</td>";
                            echo "<td>$user_data[cnpj]</td>";
                            echo "<td>$user_data[fornecedor]</td>";
                            echo "<td>$user_data[telefone]</td>";
                            echo "<td>$user_data[email]</td>";
                             
                            if($user_data['status_fornecedor'] == "Ativo"){
                              echo "<td class='text-success'>$user_data[status_fornecedor]</td>";
                              echo "<td>$user_data[obs]</td>";

                           }else{
                             echo "<td class='text-danger'>$user_data[status_fornecedor]</td>";
                             echo "<td>$user_data[obs]</td>";

                           }
                            
                        }
                    ?>
        </tbody>
      </table>
      </div>
  </body>
  <script>
    var search = document.getElementById('pesquisar');
    search.addEventListener("keydown", function(event){
      if(event.key === "Enter"){
        searchData();
      }
      
    });
      function searchData() {
        window.location = "view.listaF.php?search="+search.value;
        
      }
    
  </script>
</html>