<?php
$html = 0;
define('ROOT_PATH', dirname(__FILE__));
// var_dump(ROOT_PATH);
if(isset($_GET['page'])){
    $url = ROOT_PATH.'/view/'.$_GET['page'].'.php';
    ob_start();
    include $url;
    $html = ob_get_clean();
}else{
    $url = ROOT_PATH.'/index.php';
    ob_start();
    include $url;
    $html = ob_get_clean();
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="assets\images\logo\icon.png" type="image/x-icon" />
    <!-- <meta http-equiv="refresh" content="100;url=http://localhost/stm-orbt/index.php"> -->

    <title>Preta Modas Administração</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">


    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <style>
        table .bi {
            vertical-align: -webkit-baseline-middle!important;
        }
    
    </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                   <div class="px-5 mt-4">
                    <a href="master"><img src="assets/images/logo/logo.png" height="80" srcset=""></a>
                    </div>
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item">
                            <a href="master.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="?page=produto" class='sidebar-link'>
                            <i class="bi bi-file-earmark-bar-graph-fill"></i>
                                <span>Produtos</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="?page=cadastro_produto" class='sidebar-link'>
                                <i class="bi bi-asterisk"></i>
                                <span>Controle</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Pedidos</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="?page=pedido">Pedidos Pagos</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="?page=pedido&status=3">Pedidos para Entrega</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <?php
            echo $html;
            ?>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>