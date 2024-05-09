<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resource/css/bootstrap.min.css">
  <link rel="stylesheet" href="resource/css/style.css">
  
  <title>Gestor Manutenção</title>
</head>
<style>

</style>
<body>
  <header class="headerDash"></header>
  <section class="sidebarDash"></section>
  <main class="mainDash">
    <h2>Cadastro Endereço</h2>
    <div class="mt-3 mx-2">
      <ul class="nav nav-tabs mb-3" id="navs-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Endereços</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Novo Endereço</button>
        </li>
        <!-- <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
        </li> -->
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-profile-tab">iphone</div>
        <div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="container-form">
            <form action="">
              <div class="row">
                <div class="col-md-1 col-sm-12">
                  <label for="cep" class="form-label">Cep</label>
                  <input type="text" name="cep" class="form-control cepSearch">
                </div>
                <div class="col-md-2 col-sm-12">
                  <label for="endereco" class="form-label">Endereço</label>
                  <input type="text" name="endereco" class="form-control">
                </div>
                <div class="col-md-2 col-sm-12">
                  <label for="cidade" class="form-label">Cidade</label>
                  <input type="text" name="cidade" class="form-control">
                </div>
                <div class="col-md-2 col-sm-12">
                  <label for="bairro" class="form-label">Bairro</label>
                  <input type="text" name="bairro" class="form-control">
                </div>
                <div class="col-md-1 col-sm-12">
                  <label for="uf" class="form-label">UF</label>
                  <input type="text" name="uf" class="form-control">
                </div>
                <div class="col-md-1 col-sm-12">
                  <label for="inputCity" class="form-label">Ativo</label>
                  <select name="ativo" class="form-select">
                    <option value="S">Sim</option>
                    <option value="N">Não</option>
                  </select>
                </div>
                <div class="col">
                  <button type="button" class="btn btn-primary btnForm">Cadastrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="resource/js/jquery-3.7.1.min.js"></script>
  <script src="resource/js/bootstrap.bundle.min.js"></script>
  <script>

    $('.cepSearch').on('change', async function() {
      
      let form = $(this).closest('form');
      let cep = $(this).val();
      let cepLength = cep.length;
      if(cepLength > 8) {
        cep = cep.replace(/[-.]/g, "");
        let url = `https://viacep.com.br/ws/${cep}/json/`;
        await fetch(url).then(function(response){
          response.json().then(function(data) {
            setInputEndereco(form, data);
          })
        });
      }
    });
  
    function setInputEndereco(form, dados) {
      
      if(form && form.length > 0) {
        form.find('input[name="endereco"]').val(dados.logradouro);
        form.find('input[name="bairro"]').val(dados.bairro);
        form.find('input[name="cidade"]').val(dados.localidade);
        form.find('input[name="uf"]').val(dados.uf);
      }
    }
  </script>
</body>
</html>
