<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

<style>
.mt-3 {
  margin-top: 5% !important;
}
body{
    background: #f2f2f2;
}
</style>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link bg-$gray-300 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" 
    type="button" role="tab" aria-controls="pills-home" aria-selected="true">+ Produto</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link bg-$gray-300" id="pills-estoque-tab" data-bs-toggle="pill" data-bs-target="#pills-estoque"
    type="button" role="tab" aria-controls="pills-estoque" aria-selected="false">Estoque</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link bg-$gray-300" id="pills-fornecedor-tab" data-bs-toggle="pill" data-bs-target="#pills-fornecedor" 
    type="button" role="tab" aria-controls="pills-fornecedor" aria-selected="false">Fornecedor</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link bg-$gray-300" id="pills-upload-tab" data-bs-toggle="pill" data-bs-target="#pills-upload" 
    type="button" role="tab" aria-controls="pills-upload" aria-selected="false">Arquivo/Imagen</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link bg-$gray-300" id="pills-info-tab" data-bs-toggle="pill" data-bs-target="#pills-info" 
    type="button" role="tab" aria-controls="pills-info" aria-selected="false">Informações Adicionais</button>
  </li>
</ul>

<div class="tab-content" id="pills-tabContent">

  <!-- Home -->
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

  <!-- DADOS GERAIS -->
  <div class="container">
    <div class="row">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dados Gerais</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="code-sku-column">Código (SKU)*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="sku-column">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="product-name-column">Nome Produto*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="product-column">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="group-tipo-column">Tipo</label>
                                                <select name="tipo-group-select" class="form-select" id="group-tipo-column">
                                                <option selected>Produto</option>
                                                <option value="1">Um</option>
                                                <option value="2">Dois</option>
                                                <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="group-formt-column">Formato</label>
                                                <select name="formt-group-select" class="form-select" id="group-formt-column">
                                                <option selected>Simples</option>
                                                <option value="1">Um</option>
                                                <option value="2">Dois</option>
                                                <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Unidade</label>
                                                <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="group-sit-column">Situação</label>
                                                <select name="sit-group-select" class="form-select" id="group-sit-column">
                                                <option selected>Ativo</option>
                                                <option value="1">Desativo</option>
                                                <option value="2">Dois</option>
                                                <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">Preço Venda</label>
                                                <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="">
                                            </div>
                                        </div>

                                        <!-- CARACTERÍSTICAS -->
                                        <div class="form-group col-12 mt-3">
                                        <h5>Características</h5>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="liqui-peso-column">Peso Liquido*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="lpeso-column">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="bruto-peso-column">Peso Bruto*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="bpeso-column">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="quant-column">Quantidades</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="qnt-column">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="itens-caixa-column">Itens p/ Caixa*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="icaixa-column">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="altura-tamanho-column">Altura</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="taltura-column">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="largura-tamanho-column">Largura</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="tlargura-column">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="profun-tamanho-column">Profundidae</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="tprofun-column">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="group-unimedia-column">Uni. Medida</label>
                                                <select name="unimedia-group-select" class="form-select" id="group-unimedia-column">
                                                <option selected>Centimetros</option>
                                                <option value="1">Metros</option>
                                                <option value="2">Dois</option>
                                                <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="group-gtinean-column">GTIN/EAN*</label>
                                                <select name="gtinean-group-select" class="form-select" id="group-gtinean-column">
                                                <option selected>Sem GTIN</option>
                                                <option value="1">Um</option>
                                                <option value="2">Dois</option>
                                                <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="group-gtineant-column">GTIN/EAN Tributário*</label>
                                                <select name="gtineant-group-select" class="form-select" id="group-gtineant-column">
                                                <option selected>Sem GTIN</option>
                                                <option value="1">Um</option>
                                                <option value="2">Dois</option>
                                                <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="group-producao-column">Produção</label>
                                                <select name="producao-group-select" class="form-select" id="group-producao-column">
                                                <option selected>Própria</option>
                                                <option value="1">Terceira</option>
                                                <option value="2">Dois</option>
                                                <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                        <div class="form-group ">
                                            <label for="validate-input" >Validade</label>
                                            <input class="form-control" type="date" value="2020-01-01" id="validate-input">
                                        </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="group-condicao-column">Condição</label>
                                                <select name="condicao-group-select" class="form-select" id="group-condicao-column">
                                                <option selected>Novo</option>
                                                <option value="1">Terceira</option>
                                                <option value="2">Dois</option>
                                                <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="group-frete-column">Frete Grátis*</label>
                                                <select name="frete-group-select" class="form-select" id="group-frete-column">
                                                <option selected>Não</option>
                                                <option value="1">Terceira</option>
                                                <option value="2">Dois</option>
                                                <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="profun-marca-column">Marca</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="marca-column">
                                            </div>
                                        </div>






                                         <!-- SUBMIT/END -->
                                        <!-- <div class="mt-4 col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Cadastrar</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Limpar</button>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

  </div>
  <!-- DADOS GERAIS END -->

  <!-- PAGE 2 -->
  <div class="tab-pane fade" id="pills-estoque" role="tabpanel" aria-labelledby="pills-estoque-tab">
  <!-- ESTOQUE -->
  <div class="container">
    <div class="row">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Estoque</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">

                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="min-column">Minimo*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="0,00" name="min-column">
                                            </div>
                                          </div>
                                          <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="max-column">Maximo*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="0,00" name="max-column">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="cross-column">Crossdocking*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="cross-column">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="local-column">Localização</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="local">
                                            </div>
                                          </div>
                                           
                                        <!-- Saldo -->
                                        <div class="form-group col-12 mt-3">
                                        <h5>Saldo em estoque inicial</h5>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="group-frete-column">Deposito</label>
                                                <select name="frete-group-select" class="form-select" id="group-frete-column">
                                                <option selected>Geral</option>
                                                <option value="1">Um</option>
                                                <option value="2">Dois</option>
                                                <option value="3">Tres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="quat-valor-column">Quantidade</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="0,00" name="vquant-column">
                                            </div>
                                          </div>
                                          <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="preco-unit-column">Preço Unit.</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="0,00" name="punit-column">
                                            </div>
                                          </div>
                                          <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="preco-cust-uni-column">Preço Custo Unit.</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="0,00" name="pcuni-column">
                                            </div>
                                          </div>


                                            <!-- SUBMIT/END -->
                                           
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
  </div>
  <!-- ESTOQUE END-->

  <!-- PAGE 3 -->
  <div class="tab-pane fade" id="pills-fornecedor" role="tabpanel" aria-labelledby="pills-fornecedor-tab">
  <!-- FORNECEDOR -->
  <div class="container">
    <div class="row">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Fornecedor</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">

                                    <div class="text-center w-30">
                                    <img src="https://img.icons8.com/cute-clipart/64/000000/add-property.png"/>
                                    <div class="mt-2">
                                    <h3>Bem-vindo a Tela de Fornecedores</h3>
                                    <p>Esse produto ainda não possui nenhum fornecedor. Clique no botão abaixo e cadastre agora mesmo.</p>
                                    </div>
                                    </div>
                                    
                                    <!-- Button trigger modal -->
                                    <div class="mt-4 col-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                     Adicionar um Forncedor
                                    </button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                     <div class="modal-dialog">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Incluir Produto ao Forncedor</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- BODY MODAL -->
                                        <div class="modal-body">

                                            <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="fornec-name-column">Fornecedor*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="nfornec-column">
                                            </div>
                                          </div>
                                          <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="descri-column">Descrição*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="descri-column">
                                            </div>
                                          </div>
                                          <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="code-column">Código</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="code-column">
                                            </div>
                                          </div>
                                          <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="custo-preco-column">Preço Custo*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="0,00" name="pcusto-column">
                                            </div>
                                          </div>
                                          <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="compra-preco-column">Preço Compra*</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="0,00" name="pcompra-column">
                                            </div>
                                          </div>
                                          <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="garant-column">Garantia</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="0,00" name="garant-column">
                                            </div>
                                          </div>

                                        </div>
                                        <!-- BODY MODAL END -->
<!-- 
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div> -->
                                        </div>
                                    </div>
                                    </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
  <!-- END PAGE 3 -->
  </div>
  <!-- FORNECEDOR END -->

  <!-- PAGE 4 -->
  <div class="tab-pane fade" id="pills-upload" role="tabpanel" aria-labelledby="pills-upload-tab">
  <!-- ARQUIVO/IMAGEN -->
<!-- FORNECEDOR -->
<div class="container">
    <div class="row">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Upload Imagens</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">

                                    <div class="text-center w-30">
                                    <img src="https://img.icons8.com/cotton/50/000000/send-to-cloud.png"/>
                                    <div class="mt-2">
                                    <h3>Bem-vindo a Tela de Upload</h3>
                                    <p>Esse produto ainda não possui nehuma imagen. Clique no botão abaixo para adicionar agora mesmo.</p>
                                    </div>
                                    </div>

                                    <!-- Button Upload -->
                                    <label for="formFileMultiple" class="form-label">Faça o Upload Aqui!</label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple />
                                   


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
  <!-- ARQUIVO/IMAGEN END -->
  </div>
  <!-- PAGE 4 END -->

  <!-- PAGE 5 -->
  <div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
  <!-- INFO -->
<div class="container">
    <div class="row">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Info Adiconais</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="row">

                                         <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="link-column">Link1</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="1link-column">
                                            </div>
                                          </div>
                                          <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="link-column">Link2</label>
                                                <input type="text" id="codigo-column" class="form-control" placeholder="" name="2link-column">
                                            </div>
                                          </div>

                                         <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Descrição Curta</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                         </div>

                                         <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Descrição Completa</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                         </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
  <!-- PAGE 5 END -->
  </div>
  <!-- INFO END -->

<div class="mt-4 col-12 d-flex justify-content-end">
<button type="submit" class="btn btn-primary me-1 mb-1">Cadastrar</button>
<button type="reset" class="btn btn-light-secondary me-1 mb-1">Limpar</button>
 </div>

