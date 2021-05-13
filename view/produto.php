<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <h2>Produtos</h2>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12">
            <a href="?page=cadastro_produto" class="btn btn-success">Novo</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-md-12">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>CATEGORIA</th>
                        <th>ESTOQUE</th>
                        <th>VALOR</th>
                        <th>ATIVO</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i=0; $i < 5  ; $i++) { 
                        ?>
                        <tr>
                            <td class="text-bold-500">Michael Right</td>
                            <td>$15/hr</td>
                            <td class="text-bold-500">UI/UX</td>
                            <td>Remote</td>
                            <td>SIM</td>
                            <td>
                                <button class="btn btn-danger" "><i style="    vertical-align: -webkit-baseline-middle;" class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                        
                    </template>
                </tbody>
            </table>
        </div>
    </div>
</div>