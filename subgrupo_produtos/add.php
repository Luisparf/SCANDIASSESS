<!DOCTYPE html>
<html lang="pt-BR">
<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/


require_once('functions.php');
add();
require_once('../login/verifica_login.php');

?>
<?php include('../html/header.php'); ?>
 <!-- Sidebar -->
 <?php include('../html/sidebar.php'); ?>

<!-- Global site tag (gtag.js) - Google Ads: 366011836 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-366011836"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-366011836');
</script>
<br>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Novo Subgrupo de Produtos</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../dashboard">Início</a></li>
      <li class="breadcrumb-item">Cadastros</li>
      <li class="breadcrumb-item">Subgrupo de Produtos</li>
      <li class="breadcrumb-item active">Novo Subgrupo de Produtos</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Insira os dados</h5>

          <!-- Horizontal Form -->
          <form action="add.php" method="post">
            <div class="row mb-3">
              <label for="nome" class="col-sm-2 col-form-label">Nome*</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="subgrupo_prod['nome']" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="cod" class="col-sm-2 col-form-label">Código</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="cod" name="subgrupo_prod['cod']">
              </div>
            </div>
           
              </div>
            </fieldset>
          
            <div class="text-center">
              <input id="submit" type="submit" class="btn btn-primary" name="action" value="Salvar">
              <input id="submit2" type="submit" class="btn btn-primary" name="action" value="Salvar e Novo">
              <a href="index.php" class="btn btn-secondary" style="margin: 10px 10px 10px  0">Cancelar</a>
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>


        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


<?php include('../html/footer.php'); ?>

