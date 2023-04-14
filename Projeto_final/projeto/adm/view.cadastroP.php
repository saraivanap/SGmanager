<?php

    if(isset($_POST['submit'])){
      include_once('config.php');
        for($i=0; $i<5; $i=$i+1){
            $codigo_acesso = random_int(200000,10000000);
        }
        $id_funcionario = $_POST['id_funcionario'];
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $funcao = $_POST['funcao'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];

        $result = mysqli_query($conexao, "INSERT INTO formulario.funcionario(id_funcionario, cpf, nome, funcao, telefone, email, endereco, cidade, bairro, cep, codigo_acesso)
        VALUES('$id_funcionario',' $cpf', '$nome', '$funcao', '$telefone', '$email', '$endereco', '$cidade', '$bairro', '$cep', '$codigo_acesso')");

        if($result){
          echo "<br>";
            echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong> Cadastro realizado!
                </div>";
        }else{
          echo "<br>";
            echo "<div class='alert alert-danger'>
                    <strong>Algo deu errado!</strong> Falha ao realizar cadastro, tente novamente!
                </div>";
        }
    }
?>

<!DOCTYPE html> 
<html lang="pt-br">
<head>
<meta charset="UTF=8">
    <meta name="viewport" content="width=Bootstree, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SG manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.4.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#cpf").mask("000.000.000-00");
                $("#telefone").mask("(00)0-0000-0000");
                $("#cep").mask("00000-000");
                $("#id_funcionario").mask("00-0");
            
            })
        </script>
</head>
<style>

  .form-check-input{
    appearance: none;
    width: 20px;
    height: 20px;
    cursor: pointer;
    border-radius: 50%;
    border: 2px solid rgb(85, 179, 241);;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    outline: none;

  }.form-check-input:before{
    content: '';
    position: absolute;
    width: 10px;
    height: 10px;
    background: rgb(85, 179, 241);
    border-radius: 50%;
    opacity: 0;
    transition: all 300ms ease-in-out;
  }.form-check-input:checked:before{
    opacity: 1;
  }
  .form-check-input:checked:focus{
    box-shadow: 0 0 5px rgb(79, 199, 255);;
  }
  .form-check-label{
    padding-left: 10px;
    cursor: pointer;
    user-select: none;

  }.form-check{
    margin-bottom: 10px;
    display: flex;
    align-items: center;
  }

</style>
<body class="bg-light">
    <div class="container" action>
      <div class="py-5 text-center">
        <h2>Formulário de Cadastro</h2>
      </div>
      <form action="view.cadastroP.php" method="POST">
        <div class="row">
          <div class="col-md-4 order-md-2 mb-4">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
              </h4>
              <div class="input-group style=width: 18rem; appearance: none;">
                  <div class="card-body">
                    <h5 class="card-title">Cargo</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Atribuição do Perfil</h6>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcao" id="diretor" value="Diretor">
                      <label class="form-check-label" for="diretor">
                        Diretor
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcao" id="financeiro" value="Financeiro">
                      <label class="form-check-label" for="financeiro">
                        Financeiro
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcao" id="gpp" value="Gerente de Portifolio">
                      <label class="form-check-label" for="gpp">
                        Gerente de Portifolio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcao" id="gp" value="Gerente de Projeto">
                      <label class="form-check-label" for="gp">
                        Gerente de Projeto
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcao" id="adm" value="Administrador">
                      <label class="form-check-label" for="adm">
                        Administrador
                      </label>
                    </div>
                </div>
              </div> 
            </div>
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Perfis</h4>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control"  name="nome" id="nome" placeholder="" value="" required="" autocomplete="off">
                  <div class="invalid-feedback">
                    Valid nome is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" value="" required="" autocomplete="off">
                  <div class="invalid-feedback">
                    Valid CPF is required.
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="id_funcionario">Nº ID</label>
                      <input type="text" class="form-control" name="id_funcionario" id="id_funcionario" placeholder="00-0" value="" required="" autocomplete="off">
                      <div class="invalid-feedback">
                        Valid nID is required.
                      </div>
                    </div>
                  <div class="col-md-6 mb-3">
                    <label for="tel">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(99) 9 9999-9999" value="" required="" autocomplete="off">
                    <div class="invalid-feedback">
                      Valid tel is required.
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                <label for="email">email <span class="text-muted"></span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="seunome@exemplo.com" autocomplete="off"> 
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
              <div class="mb-3">
                  <label for="endereco">Endereço</label>
                  <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua" required="" autocomplete="off">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
              <div class="mb-3">
                  <label for="bairro">Bairro</label>
                  <input type="text" class="form-control" name="bairro" id="bairro" autocomplete="off" placeholder="" required="">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
              <div class="mb-3">
                  <label for="cidade">Cidade</label>
                  <input type="text" class="form-control" name="cidade" id="cidade" autocomplete="off" placeholder="" required="">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                  <div class="mb-3">
                    <label for="address2">Complemento <span class="text-muted">(Opicional)</span></label>
                    <input type="text" class="form-control" id="address2">
                  </div>           
                </div>
                <div class="row">
                  <div class="col-md-5 mb-3">
                    <label for="country">País</label>
                    <select class="custom-select d-block w-100" id="country" >
                      <option value="">Selecionar</option>
                      <option>Brasil</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="Estado">Estado</label>
                    <select class="custom-select d-block w-100" id="Estado" >
                      <option value="">Selecionar</option>
                      <option>Pará</option>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000" required="" autocomplete="off">
                    <div class="invalid-feedback">
                        CEP code required.
                    </div>
                  </div>
                </div>
                

                  <Button class="btn btn-primary my-2" name="submit" id="submit" type="submit">Finalizar Cadastro</Button>
                  <a href="#" onclick="limpar()" class="btn btn-secondary my-2">Limpar Tudo</a>
                  <a href="view.adm.php" class="btn btn-info my-2">Voltar</a>
                </p>
          </div>
        </div>

          <footer class="my-5 pt-5 text-muted text-center text-small">
          <p class="mb-1">© 2023 SG manager</p>
          <ul class="list-inline">
          </ul>
        </footer>
      </form>

    </div>

        <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
      
    
    <svg xmlns="http://www.w3.org/2000/svg" width="208" height="225" viewBox="0 0 208 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="11" style="font-weight:bold;font-size:11pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body>
    

    <script src="https://code.jquery.com/jquery-3.6.4.a.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
<script>
  function limpar(){
    if($('limpar')){
        $("#nome").val("");
        $("#cpf").val("");
        $("#id").val("");
        $("#telefone").val("");
        $("#email").val("");
        $("#cidade").val("");
        $("#endereco").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#country").val("");
        document.getElementById("adm").checked = false;
        document.getElementById("gp").checked = false;
        document.getElementById("gpp").checked = false;
        document.getElementById("financeiro").checked = false;
        document.getElementById("diretor").checked = false;

    }
  }

$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#endereco").val("");
        $("#bairro").val("");
        $("#cidade").val("");

    }
    
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#endereco").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");


                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#endereco").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});

</script>
</html>