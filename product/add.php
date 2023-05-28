<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ScandiWeb</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="../assets/css/sweetalert2.min.css" rel="stylesheet">
  <link href="../assets/css/sweetalert.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">  estilo tabela -->

  <link rel="stylesheet" href="../assets/css/toastr.min.css">

  <!-- <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" > -->

  <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.js"></script>



  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
            <li class="breadcrumb-item"><a href="../index.php">Start</a></li>
            <li class="breadcrumb-item active">Product Add</li>
          </ol>
        </nav>
      </div>
      <div class="col align-end">
        <button id="saveBtn" type="button" class="btn btn-primary">Save</button>
        <a href="../index.php">
          <button type="button" class="btn btn-primary" id="massdel">Cancel</button>
        </a>
      </div>
    </div>

    <div class="line"></div>

    <section class="section col-sm-6">
      <div class="card ">
        <div class="card-body ">
          <h5 class="card-title">New Product</h5>

          <!-- Horizontal Form -->
          <form id="product_form" method="POST">

            <!-- <div class="form-container"> -->
            <div class="row mb-3">
              <label for="sku" class="col-sm-2 col-form-label">SKU*</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="sku" name="sku" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="name" class="col-sm-2 col-form-label">Name*</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="price" class="col-sm-2 col-form-label">Price*</label>
              <div class="col-sm-10">
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
              </div>
            </div>


            <div class="row mb-3">
              <label for="productType" class="col-sm-2 col-form-label">Type*</label>
              <div class="col-sm-10">

                <select id="productType" name="productType" class="form-select" onchange="changeType()" aria-label="State" required>
                  <option  value="none" selected></option>
                  <option id="DVD" value="dvd" >DVD</option>
                  <option id="Furniture" value="furniture">Furniture</option>
                  <option id="Book" value="book">Book</option>
                </select>
              </div>
            </div>

            <div  id="inputContainer">

            </div>
            <!-- </div> -->

          </form><!-- End Horizontal Form -->

        </div>
      </div>


    </section>
    <?php include "../html/footer.php" ?>


  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

<script type="text/javascript">


  $(document).ready(function() {
    $("#saveBtn").click(function() {
      // Get the form data
      var formData = $("#product_form").serialize();

      // Send an AJAX request to the server
      $.ajax({
        url: "addProduct.php",
        type: "POST",
        data: formData,
        // dataType: "json",
        success: function(response) {
          console.log("Response" + response) ;
          window.location.replace('../index.php')
        },
        error: function(xhr, status, error) {
          // Handle AJAX error
          console.error("AJAX request failed: " + error);
          //  window.location.replace('../index.php')

        }
      });
    });
  });

  const typeActions = {
      dvd: () => {
        document.getElementById("inputContainer").innerHTML = '<div class="row mb-2"><label for="size" class="col-sm-2 col-form-label">Size (MB)</label><div class="col-sm-8"><input type="number" class="form-control" id="size" name="size" placeholder="0.00" placeholder="placeholder" required><span><strong>Please, provide size in MB.</strong></span></div></div>';

      },
      furniture: () => {
         document.getElementById("inputContainer").innerHTML =
         '<div class="row mb-3"><label for="height" class="col-sm-2 col-form-label">Height (CM)</label><div class="col-sm-8"><input type="number" step="0.01" class="form-control" id="height" name="height" placeholder="0.00" required></div></div><div class="row mb-3"><label for="width" class="col-sm-2 col-form-label">Width (CM)</label><div class="col-sm-8"><input type="number" step="0.01" class="form-control" id="width" name="width" placeholder="0.00" required></div></div><div class="row mb-3"><label for="length" class="col-sm-2 col-form-label">Length (CM)</label><div class="col-sm-8"><input type="number" step="0.01" class="form-control" id="length" name="length" placeholder="0.00" required><span><strong>Please, provide dimesions in HxWxL format.</strong></span></div></div>';
      },
      book: () => {
        document.getElementById("inputContainer").innerHTML = '<div class="row mb-3"><label for="weight" class="col-sm-2 col-form-label">Weight (KG)</label><div class="col-sm-8"><input type="number" class="form-control" id="weight" name="weight" placeholder="0.00" required><span><strong>Please, provide weight in KG.</strong></span></div></div>';
      },
      none: () => {
        document.getElementById("inputContainer").innerHTML = '<div class="hidden"></div>';
      }
  };


  function changeType() {
    const selectedValue = document.getElementById("productType").value;
    typeActions[selectedValue]();
  }

</script>


</body>


</html>