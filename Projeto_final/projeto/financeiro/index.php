<?php 
    session_start();
    if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['cod'])==true)){
        unset($_SESSION['email']);
        unset($_SESSION['cod']);
        header('Location: ../view.login.php');
}
$logado = $_SESSION['email'];
    include_once('config.php');
    $x = 0;
    $y = 0;

    $sql = "SELECT * FROM formulario.cliente";
    $result =  mysqli_query($conexao, $sql);
    while($row = mysqli_fetch_assoc($result)){
        if($row['status_cliente']== "Ativo"){
            $x++;
        }
        else{
           $y++; 
        }
        
    }

    $a = 0;
    $b = 0;

    $sql = "SELECT * FROM formulario.fornecedor";
    $result =  mysqli_query($conexao, $sql);
    while($row = mysqli_fetch_assoc($result)){
        if($row['status_fornecedor']== "Ativo"){
            $a++;
        }
        else{
           $b++; 
        }
        
    }

    $verificador = "SELECT  data_emissao, Mes, lucro,
                    SUM(lucro) OVER (PARTITION BY Mes ORDER BY Mes ASC) AS acumulo 
                    FROM(
                    SELECT data_emissao
                        
                        ,MONTH( data_emissao) AS Mes
                        ,SUM(valor) AS lucro
                        FROM formulario.ordem_de_servico
                        GROUP BY id, MONTH(data_emissao)
                        )AS os_por_mes";

    $jan=0;
    $fev=0;
    $mar=0;
    $abr=0;
    $mai=0;
    $jun=0;
    $jul=0;
    $ago=0;
    $set=0;
    $out=0;
    $nov=0;
    $dez=0;

    $new_verificador = mysqli_query($conexao, $verificador);
    while($total = mysqli_fetch_assoc($new_verificador)){
        if($total['Mes'] == "1"){
            $jan = $total['acumulo'];
        }
        else if($total['Mes'] == "2"){
            $fev = $total['acumulo'];
        }
        else if($total['Mes'] == "3"){
            $mar = $total['acumulo'];
        }
        else if($total['Mes'] == "4"){
            $abr = $total['acumulo'];
        }
        else if($total['Mes'] == "5"){
            $mai = $total['acumulo'];
        }
        else if($total['Mes'] == "66"){
            $jun = $total['acumulo'];
        }
        else if($total['Mes'] == "7"){
            $jul = $total['acumulo'];
        }
        else if($total['Mes'] == "8"){
            $ago = $total['acumulo'];
        }
        else if($total['Mes'] == "9"){
            $set = $total['acumulo'];
        }
        else if($total['Mes'] == "10"){
            $out = $total['acumulo'];
        }
        else if($total['Mes'] == "11"){
            $nov = $total['acumulo'];
        }
        else if($total['Mes'] == "12"){
            $dez = $total['acumulo'];
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'total'],
          ['Ativo',    <?php echo $x?>],
          ['Inativo',     <?php echo $y?>],


        ]);

        var options = {
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'total'],
          ['Ativo',    <?php echo $a?>],
          ['Inativo',     <?php echo $b?>],


        ]);

        var options = {
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('mydonutchart'));
        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Ganho Mensal'],
          ['Jan',  <?php echo $jan?>],
          ['Fev', <?php echo $fev?> ],
          ['Mar', <?php echo $mar?>],
          ['Abr', <?php echo $abr?>],
          ['Mai',  <?php echo $mai?>],
          ['Jun', <?php echo $jun?>],
          ['Jul', <?php echo $jul?>],
          ['Ago', <?php echo $ago?>],
          ['Set', <?php echo $set?>],
          ['Out', <?php echo $out?>],
          ['Nov', <?php echo $nov?>],
          ['Dez', <?php echo $dez?>]
        ]);

        var options = {

          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Iris Pinheiro">

    <title>SG manager- Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js" integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="view.financeiro.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SG manager</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="view.listaC.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Clientes</span></a>
            </li>
             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="view.listaF.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Fornecedores</span></a>
            </li>
             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="listaContratoC.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Contrato c/ Clientes</span></a>
            </li>
             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="listaContratoF.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Contrato c/ Fornecedores</span></a>
            </li>
             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="relatorio_os.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Ordens de serviço</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo  $_SESSION['financeiro'];?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Ordens de serviço Emitidas
                                             <?php
                                                $dash_category_query = "SELECT * FROM formulario.ordem_de_servico";
                                                $dash_category_query_run = mysqli_query($conexao, $dash_category_query);

                                                if($category_total = mysqli_num_rows($dash_category_query_run)){
                                                    echo '<h4 class="mb-0">'. $category_total . '</h4>';
                                                }
                                                else{
                                                    echo '<h4 class="mb-0"> 0</h4>';
                                                }
                                            ?>
                                            
                                            </div>
               
                                        </div>
                                        <div class="col-auto">
                                            <i  class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                           O.S Executadas
                                             <?php
                                                $dash_category_query = "SELECT * FROM formulario.relatorio WHERE status_os = 'Em Execução'";
                                                $dash_category_query_run = mysqli_query($conexao, $dash_category_query);

                                                if($category_total = mysqli_num_rows($dash_category_query_run)){
                                                    echo '<h4 class="mb-0">'. $category_total . '</h4>';
                                                }
                                                else{
                                                    echo '<h4 class="mb-0"> 0 </h4>';
                                                }
                                            ?>

                                        </div>
                                    </div>
                                        <div class="col-auto">
                                            <i  class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">O.S Finalizadas
                                            <?php
                                                $dash_category_query = "SELECT * FROM formulario.relatorio WHERE status_os = 'Finalizada'";
                                                $dash_category_query_run = mysqli_query($conexao, $dash_category_query);

                                                if($category_total = mysqli_num_rows($dash_category_query_run)){
                                                    echo '<h4 class="mb-0">'. $category_total . '</h4>';
                                                }
                                                else{
                                                    echo '<h5 class="mb-0"> 0 </h5>';
                                                }

                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1 dropdown no-arrow" >
                                            Ganho Mensal
                                               
                                                    <a class="dropdown-toggle dropdown no-arrow" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400" style="margin-left: 80px;"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                        <form action="index.php" method="POST">
                                                        <div class="dropdown-header">Mês:</div>
                                                            <select name="op" id="op"style="padding: 5px; outline: none; width: 40%; margin-left: 15px; border: none;">
                                                                <option>...</option>
                                                                <option value="1">Jan</option>
                                                                <option value="2">Fev</option>
                                                                <option value="3">Mar</option>
                                                                <option value="4">Abr</option>
                                                                <option value="5">Mai</option>
                                                                <option value="6">Jun</option>
                                                                <option value="7">Jul</option>
                                                                <option value="8">Ago</option>
                                                                <option value="9">Set</option>
                                                                <option value="10">Out</option>
                                                                <option value="11">Nov</option>
                                                                <option value="12">Dez</option>
                                                            </select>
                                                            <button type="submit" id="submit" name="submit" style="border: 1px solid #E3E3EC; border-radius: 5px ; margin-left: 25px; width: 25%; background: white; color: #23B94A;">ir</button>
                                                        </div>      
                                                        </form>  

                                         <div class="h5 mb-0 font-weight-bold text-success-800">
                                            <?php
                                               
                                                $query_valor = "SELECT data_emissao, mes_atual, lucro,
                                                SUM(lucro) OVER(PARTITION BY mes_atual ORDER BY mes_atual DESC) AS acumulo 
                                               FROM(
                                               SELECT data_emissao
                                                   
                                                   ,month( data_emissao) AS mes_atual
                                                   ,SUM(valor) AS lucro
                                                   FROM formulario.ordem_de_servico
                                                   GROUP BY mes_atual, month(data_emissao)
                                                   
                                                   )AS os_por_mes
                                                   ORDER BY 1";

                                                $result = mysqli_query($conexao, $query_valor);
                                                while($row = mysqli_fetch_assoc($result)){
                                                $op = isset($_POST['op']) ? $op = $_POST['op']: 0;
                                                    if($row['mes_atual']=='1' and $op  == "1"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='2' and $op  == "2"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='3' and $op  == "3"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='4' and $op  == "4"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='5' and $op  == "5"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='6' and $op  == "6"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='7' and $op  == "7"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='8' and $op  == "8"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='9' and $op  == "9"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='10' and $op  == "10"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='11' and $op  == "11"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                    else if($row['mes_atual']=='12' and $op  == "12"){
                                                        echo '<h4 class="mb-0 ">R$ '. number_format($row['acumulo'], 2, ",", ".")  . '</h4>';
                                                    }
                                                        
                                                }
                                                
                                            ?>
                                            </div>
                                        </div>
                                           
                                        </div>
                                        <div class="col-auto">
<!--                                             
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Ganho mensal</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" style="height: 360px;">
                                    
                                    <div class="chart-area">
                                    <div id="curve_chart" style="width: 670px; height: 350px;  margin-top: -20px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Contratos</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" style="height: 360px;">
                                <br><br>
                                         <?php
                                             $linhas = "SELECT * FROM formulario.contrato_cliente";
                                             
                                             if ($stmt = $conexao->prepare($linhas)) {
                                              $stmt->execute();
                                              $stmt->store_result();
                                          }
                                          ?>
                                 <h4 class="small font-weight-bold">Contrato c/ cliente <span
                                            class="float-right"><?php echo '<h5 class="mb-0 ">'.$stmt->num_rows. '</h5>'; ?></span></h4>
                                          
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <?php
                                             $linhas = "SELECT * FROM formulario.contrato_fornecedor";
                                             
                                             if ($stmt = $conexao->prepare($linhas)) {
                                              $stmt->execute();
                                              $stmt->store_result();
                                          }
                                          ?>
                                    <h4 class="small font-weight-bold">Contrato c/ fornecedor <span
                                            class="float-right"><?php echo '<h5 class="mb-0 ">'.$stmt->num_rows. '</h5>'; ?></span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                   
                                    <div class="mt-4 text-center small">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
                                </div>
                                <div class="card-body" >
                                    <div id="donutchart" style="width: 500px; height: 300px;"></div>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Fornecedores</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                    <div id="mydonutchart" style="width: 500px; height: 300px;"></div>
                                    </div>
                                    
                                </div>
                            </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SG manager 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione Logout para encerrar a sessão.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../encerrar.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>