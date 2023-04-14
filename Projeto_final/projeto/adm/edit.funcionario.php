<?php

    if(!empty($_GET['id'])){

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM formulario.funcionario  WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){
                $id_funcionario = $user_data['id_funcionario'];
                $cpf = $user_data['cpf'];
                $nome = $user_data['nome'];
                $funcao = $user_data['funcao'];
                $telefone = $user_data['telefone'];
                $email = $user_data['email'];
                $cidade = $user_data['cidade'];
                $bairro = $user_data['bairro'];
                $endereco = $user_data['endereco'];
                $cep = $user_data['cep'];
            }
            
        }
        else{
            header('Location: view.listaP.adm.php');
        }

    }
?>

<!doctype html>
<html lang="pt">

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
    transition: all 600ms ease-in-out;
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
<body>
    <div class="container" action>
        <div class="py-5 text-center">
            <h2>Formulário de Cadastro</h2>
        </div>
        <form action="saveEdit.funcionario.php" method="POST">
        <div class="row">
          <div class="col-md-4 order-md-2 mb-4">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
              </h4>
              <div class="input-group style="width: 18rem;>
                  <div class="card-body">
                    <h5 class="card-title">Cargo</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Atribuição do Perfil</h6>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcao" id="diretor" value="Diretor" <?php echo $funcao == 'Diretor' ? 'checked' : ''?>>
                      <label class="form-check-label" for="Diretor">
                        Diretor
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcao" id="financeiro" value="Financeiro" <?php echo $funcao == 'Financeiro' ? 'checked' : ''?>>
                      <label class="form-check-label" for="Financeiro">
                        Financeiro
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcao" id="gpp" value="Gerente de Portifolio" <?php echo $funcao == 'Gerente de Portifolio' ? 'checked' : ''?>>
                      <label class="form-check-label" for="GerentePortifolio">
                        Gerente de Portifolio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcao" id="gp" value="Gerente de Projeto" <?php echo $funcao == 'Gerente de Projeto' ? 'checked' : ''?>>
                      <label class="form-check-label" for="GerenteProjeto">
                        Gerente de Projeto
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="funcao" id="adm" value="Administrador" <?php echo $funcao == 'Administrador' ? 'checked' : ''?>>
                      <label class="form-check-label" for=" Administrador">
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
                  <input type="text" class="form-control"  name="nome" id="nome" placeholder="" value="<?php echo $nome?>" required="" autocomplete="off">
                  <div class="invalid-feedback">
                    Valid nome is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" value="<?php echo $cpf?>" required="" autocomplete="off">
                  <div class="invalid-feedback">
                    Valid CPF is required.
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="id_funcionario">Nº ID</label>
                      <input type="text" class="form-control" name="id_funcionario" id="id_funcionario" placeholder="00-0" value="<?php echo $id_funcionario?>" required="" autocomplete="off">
                      <div class="invalid-feedback">
                        Valid nID is required.
                      </div>
                    </div>
                  <div class="col-md-6 mb-3">
                    <label for="tel">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(99) 9 9999-9999" value="<?php echo $telefone?>" required="" autocomplete="off">
                    <div class="invalid-feedback">
                      Valid tel is required.
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                <label for="email">email <span class="text-muted"></span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="seunome@exemplo.com" autocomplete="off" value="<?php echo $email?>"> 
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
              <div class="mb-3">
                  <label for="endereco">Endereço</label>
                  <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua" required="" autocomplete="off" value="<?php echo $endereco?>">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
              <div class="mb-3">
                  <label for="bairro">Bairro</label>
                  <input type="text" class="form-control" name="bairro" id="bairro" autocomplete="off" placeholder="" required="" value="<?php echo $bairro?>">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
              <div class="mb-3">
                  <label for="cidade">Cidade</label>
                  <input type="text" class="form-control" name="cidade" id="cidade" autocomplete="off" placeholder="" required="" value="<?php echo $cidade?>">
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
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000" required="" autocomplete="off" value="<?php echo $cep?>">
                    <div class="invalid-feedback">
                        CEP code required.
                    </div>
                  </div>
                </div>
                
                  <input type="hidden" name="id" value="<?php echo $id?>">
                  <Button class="btn btn-primary my-2" name="update" id="update" type="submit">Atualizar Cadastro</Button>
                  <a href="view.listaP.adm.php" class="btn btn-info my-2">Voltar</a>
                </p>
          </div>
        </div>

          <footer class="my-5 pt-5 text-muted text-center text-small">
          <p class="mb-1">© 2023 SG manager</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Sobre</a></li>
          </ul>
        </footer>
        </form>
    </div>

</body>
<script>
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


