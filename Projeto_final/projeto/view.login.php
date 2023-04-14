<?php
  session_start();
    if(isset($_POST['submit'])){
      include_once('config.php');

      if(isset($_POST['email']) && isset($_POST['codigo_acesso'])){
        
        $email = $conexao->real_escape_string($_POST['email']);
        $cod_acesso = $conexao->real_escape_string($_POST['codigo_acesso']);
        
        // $cod_acesso = $_POST['codigo_acesso'];
        $get = "SELECT * FROM formulario.funcionario WHERE email = '$email' AND codigo_acesso = '$cod_acesso'";
        $result = $conexao->query($get);

        $num = mysqli_num_rows($result);
        if($num == 1){
          while($busca = mysqli_fetch_assoc($result)){
            $funcao = $busca['funcao'];
            $nome = $busca['nome'];
            $email = $busca['email'];
            $cod = $busca['codigo_acesso'];

            if($funcao == 'Administrador'){
              $_SESSION['adm'] = $nome;
              $_SESSION['email'] = $email;
              $_SESSION['cod'] = $cod;
             header('Location: adm/view.adm.php');
            }

            else if($funcao == 'Diretor'){
              $_SESSION['diretor'] = $nome;
              $_SESSION['email'] = $email;
              $_SESSION['cod'] = $cod;
              header('Location: diretor/view.diretor.php');
            }

            else if($funcao == 'Financeiro'){
              $_SESSION['financeiro'] = $nome;
              $_SESSION['email'] = $email;
              $_SESSION['cod'] = $cod;
              header('Location: financeiro/view.financeiro.php');
            }

            else if($funcao == 'Gerente de Projeto'){
              $_SESSION['gp'] = $nome;
              $_SESSION['email'] = $email;
              $_SESSION['cod'] = $cod;
              header('Location: gp/view.GERprojeto.php');
            }

            else if($funcao == 'Gerente de Portifolio'){
              $_SESSION['gpp'] = $nome;
              $_SESSION['email'] = $email;
              $_SESSION['cod'] = $cod;
              header('Location: gpp/view.GERportifolio.php');
            }
          }
        }
        else if($num  < 1){
          unset($_SESSION['email']);
          unset($_SESSION['cod']);
          header('Location: view.login.php');
        }
      }
      
    }
?>

<!DOCTYPE html> 
<html lang="pt">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SG manager</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
<style>
  #icon{
    position: absolute;
    top: 31%;
    right: 65px;
    transform: translate(-50%);
    background: url('eye.svg');
    width: 16px;
    height: 16px;
    cursor: pointer;
    background-size: cover;
  } #icon.hide{
    background: url('eye.svg');
    background-size: cover;
  }

</style>
  <body>
    
    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin" >
      <div class="modal-dialog" role="document" >
        <div class="modal-content rounded-4 shadow">
          <div class="modal-header p-5 pb-4 border-bottom-0" >
            <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
            <h5 class="fw-bold mb-0 fs-2 " style="margin-left: 100px; color: #3f445e;">Bem vindo de volta!</h5>
            
          </div>
          <form action="view.login.php" method="POST">
          <div class="modal-body p-5 pt-0" style="height: 390px; ">
               
              <div class="form-floating mb-3">
                <input type="text"class="form-control rounded-3" name="email" id="email" placeholder="E-mail" style="border-radius: 20px;" required autocomplete="off" >
                <br>
                <input type="password" class="form-control rounded-3" id="codigo_acesso" name="codigo_acesso" placeholder="Código de Acesso" required style="border-radius: 20px;" >
                <div id="icon" onclick="showHide()"></div>
              </div>
              <br><br>
              <input class="w-100 mb-2 btn btn-lg rounded-3 btn-primary"  type="submit" name="submit" value="Entrar" style="border-radius: 40px;  border: none;"></input>
            
          </div>
        </div>
      </div>
    </div>
    </form>

</body>
<script>
  const password = document.getElementById('codigo_acesso');
  const icon = document.getElementById('icon');

  function showHide(){
    if(password.type === 'password'){
      password.setAttribute('type', 'text');
      icon.classList.add('hide');
    }else{
      password.setAttribute('type', 'password');
      icon.classList.remove('hide');
    }
  }
  
</script>

</html>