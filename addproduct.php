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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/sweetalert2.min.css" rel="stylesheet" >
  <link href="assets/css/sweetalert.css" rel="stylesheet" >

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >


  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">  estilo tabela -->

  <link rel="stylesheet" href="assets/css/toastr.min.css">

  <!-- <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" > -->

  <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<style>

</style>
<body>


  <main id="main" class="main ">

      <div class="row align-items-center">
        <div class="col pagetitle">
          <h1>Product Add</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Start</a></li>
              <li class="breadcrumb-item active">Product Add</li>
            </ol>
          </nav>
        </div>
        <div class="col align-end">
          <button type="button" class="btn btn-primary">Save</button>
          <a href="index.php">
            <button type="button" class="btn btn-primary" id="massdel">Cancel</button>
          </a>
        </div>
    </div>

    <div class="line"></div>

    <section class="section col-sm-6 ">
    <div class="card ">
            <div class="card-body ">
              <h5 class="card-title">New Product</h5>

              <!-- Horizontal Form -->
              <form >

              <!-- <div class="form-container"> -->
                  <div class="row mb-3">
                    <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="sku" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number"  step="0.01" class="form-control" id="price" required>
                    </div>
                  </div>

                  <div class="row mb-3" >
                      <label for="categoria">Categoria*</label>

                      <select id="categoria"  class="form-select" required>
                          <option value="fisica" selected>Pessoa Física</option>
                          <option value="juridica">Pessoa Jurídica</option>
                      </select>
                  </div>


              <!-- </div> -->

              </form><!-- End Horizontal Form -->

            </div>
          </div>



    </section>
      <?php include "html/footer.php" ?>


  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>