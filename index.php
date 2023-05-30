<!DOCTYPE html>


<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ScandiWeb</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/css/sweetalert2.min.css" rel="stylesheet">
    <link href="assets/css/sweetalert.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">  estilo tabela -->

    <link rel="stylesheet" href="assets/css/toastr.min.css">

    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<style>

</style>

<body>

<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once 'product/Product.php';
$products = Product::all();
// var_dump($products);
?>

    <main id="main" class="main">

        <div class="row align-items-center">
            <div class="col pagetitle">
                <h1>Product List</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Start</a></li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </nav>
            </div>
            <div class="col align-end">
                <a href="product/add.php">
                    <button type="button" class="btn btn-primary">Add</button>
                </a>
                <button class="btn btn-primary" id="delete-product-btn">Mass Delete</button>
            </div>
        </div>

        <div class="line"></div>

        <section class="section">
            <div>
                <div class="row">
                    <?php if (empty($products)) : ?>
                    <p>There are no registered products.</p>
                    <?php else : ?>
                    <?php foreach ($products as $product) : ?>
                    <div class="card card-small" data-product-id="<?php echo $product['id']; ?>">
                        <input class="delete-checkbox" type="checkbox">
                        <div class="card-body">
                            <h5 class="card-title mb-1">
                                <?php echo $product['sku']; ?>
                            </h5>
                            <p class="card-text mb-1">
                                <?php echo $product['name']; ?>
                            </p>
                            <p class="card-text mb-1">
                                <?php echo $product['price']; ?>$
                            </p>
                            <?php if (isset($product['size'])) : ?>
                            <p class="card-text">Size:
                                <?php echo $product['size']; ?>MB
                            </p>
                            <?php endif; ?>

                            <?php if (isset($product['weight'])) : ?>
                            <p class="card-text">Weight:
                                <?php echo $product['weight']; ?>KG
                            </p>
                            <?php endif; ?>
                            <?php if (isset($product['height']) && isset($product['width']) && isset($product['length'])) : ?>
                            <p class="card-text">Dimension:
                                <?php echo $product['height']; ?>x
                                <?php echo $product['width']; ?>x
                                <?php echo $product['length']; ?>
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php include "html/footer.php" ?>


    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script type="text/javascript">

        $("#delete-product-btn").on("click", function () {
            var cardElements = $('.card input.delete-checkbox:checked').closest('.card');
            var dataArr = [];

            // Coletar os IDs dos produtos dos cards selecionados
            cardElements.each(function () {
                var productID = $(this).data('product-id');
                dataArr.push(productID);
            });

            console.log(dataArr)
            // teste
            // Enviar uma solicitação AJAX para deleteProdutos.php
            $.ajax({
                cache: false,
                url: 'product/massDelete.php',
                method: 'POST',
                data: { dataArr: dataArr },
                success: function (response) {
                    console.log(response);
                }
            });

            // Remover os cards selecionados
            cardElements.remove();
        });

    </script>

</body>

</html>