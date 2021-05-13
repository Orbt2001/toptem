<?php
if(isset($_GET['status'])){
    echo "AQUI VAI SERA OS PARA SEREM ENTREGUES";
}
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <h2>Pedidos</h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-md-12">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>CÓDIGO</th>
                        <th>SITUAÇÃO</th>
                        <th>DATA PARA ENVIO</th>
                        <th>VALOR</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i=1; $i <= 5  ; $i++) { 
                        ?>
                        <tr>
                            <td><?=$i?></td>
                            <td class="text-bold-500">Michael Right</td>
                            <td>$15/hr</td>
                            <td class="text-bold-500">UI/UX</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                <button class="btn btn-warning"><i class="bi bi-truck"></i> ENVIO</button>
                                <button class="btn btn-info"><i class="bi bi-file-earmark-text"></i> NFE</button>
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