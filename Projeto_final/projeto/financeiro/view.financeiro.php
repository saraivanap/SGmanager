<?php
  session_start();

  if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['cod'])==true)){
          unset($_SESSION['email']);
          unset($_SESSION['cod']);
          header('Location: ../view.login.php');
  }
  $logado = $_SESSION['email'];
?>
<!DOCTYPE html> 
<html lang="pt">
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=Bootstree, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SG manager</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <body>

        <header>
          <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                  <h4 class="text-white">Financeiro</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
              <a href="#" class="navbar-brand d-flex align-items-center">
                <strong><?php echo 'Olá, '. $_SESSION['financeiro'];?></strong>
              </a>
              <style>
                  .btnLog{
                    background-color:#878787;
                    width: 70px;
                    right: 200px;
                    border-radius: 15px;
                    align-items: center;
                    padding: 3px;
                    text-align: center;
                    
                  }
                  .btnLog a{
                    text-decoration: none;
                    color: white;
                  }
              </style>
              <div class="btnLog">
                <a href="../encerrar.php">Sair 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                    <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                  </svg>
                </a>
                  
              </div>
            </div>
          </div>
        </header>
    
        <main role="main">
            <div class="album py-5 bg-light">
            <div class="container">
    
              <div class="row">
                <div class="col-md-4">  
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="svg/undraw_agreement_re_d4dv.svg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                    <div class="card-body">
                      <p class="card-text"><strong>Cliente</strong></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a button type="button" href="view.contrato-cliente.php" class="btn btn-sm btn-outline-secondary">Emitir Contrato</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="svg/cont.svg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                    <div class="card-body">
                      <p class="card-text"><strong>Fornecedor</strong></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a button type="button" href="view.contrato-fornecedor.php" class="btn btn-sm btn-outline-secondary">Emitir Contrato</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="svg/dashboard.svg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                    <div class="card-body">
                      <p class="card-text"><strong>Dashboard</strong></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a button type="button" href="index.php" class="btn btn-sm btn-outline-secondary">Visualizar</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>

          
        </main>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2023 SG manager</p>
            <ul class="list-inline">
            </ul>
        </footer>
    
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
      
    
    <svg xmlns="http://www.w3.org/2000/svg" width="208" height="225" viewBox="0 0 208 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="11" style="font-weight:bold;font-size:11pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>