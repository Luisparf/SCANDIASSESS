<!DOCTYPE html>
<html lang="pt-br" style="overflow-x: hidden;">

<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
error_reporting(E_ERROR | E_PARSE); // esconder warnings


require_once('../login/verifica_login.php');

if (!isset($_SESSION)) {
    session_start();
    
}
$_SESSION['type'] = 'dange';
$_SESSION['message'] = 'message';

require_once('functions.php');
index_sgp();

?>  
  

    <!-- Header -->
    <?php include "../html/header.php" ?>
    <!-- End Header -->

    <!-- Sidebar -->
    <?php include "../html/sidebar.php" ?>
    <!-- end Sidebar-->

    
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>


<!-- Global site tag (gtag.js) - Google Ads: 366011836 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-366011836"></script>
<script>    
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-366011836');
    </script>
  

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cadastro SubGrupo de Produtos</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../dashboard">Início</a></li>
          <li class="breadcrumb-item">Cadastros</li>
          <li class="breadcrumb-item active" style="margin: 0 0 10px 10px;" >SubGrupo de Produtos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <a style="width:140px; margin: 0 0 0 10px; display:flex; text-align:center; justify-content:center; line-height: 1;" class="btn btn-success" href="add.php"><i class="fa fa-plus"></i>Subgrupo de Produtos</a>
              </h5>
              
              <!-- Table with stripped rows -->
              <table  class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Código</th>
                    <th scope="col">Data da Criação</th>
                    <th scope="col">Última atualização</th>
                    <th scope="col"></th> 

                  </tr>
                </thead>
                <tbody>
                <?php foreach ($subgrupo_prods as $subgrupo_prod){?>
                <tr id="row-subgrupo_prod">
                    <td><?php echo $subgrupo_prod['id']; ?></td>
                    <td><?php echo $subgrupo_prod['nome']; ?></td>
                    <td><?php echo $subgrupo_prod['codigo']; ?></td>
                    <td><?php echo $subgrupo_prod['criadoEm']; ?></td>
                   <td><?php echo $subgrupo_prod['atualizadoEm']; ?></td>
                    <td class="actions text-right rowlink-skip" style="text-align: center;">
                        <a href="edit.php?id=<?php echo $subgrupo_prod['id']; ?>" class="btn btn-xs btn-warning" data-tooltip="tooltip" title="Editar" ><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-xs btn-danger" data-tooltip="tooltip" title="Excluir"  onclick="swalDelete(<?php echo $subgrupo_prod['id']; ?>)"><i class="fa fa-trash"></i></a>
                    </td> 
                </tr>
            <?php } ?> 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include "../html/footer.php" ?>
  <script src="../assets/js/toastr.min.js"></script>

  
<script type="text/javascript">
    if("danger" === '<?php echo $_SESSION['type'] ?>'){
        toastr.error('<?php echo $_SESSION['message'] ?>');
    }else if("success" === '<?php echo $_SESSION['type'] ?>'){
        toastr.success('<?php echo $_SESSION['message'] ?>');
    }
   <?php unset($_SESSION['message']); unset($_SESSION['type']); ?>
   /*
      $('#tabela-subgrupo_prod').DataTable({
          "bFilter": true,
          "bPaginate": true,
          "bSort": true,
          responsive: true,
          language: {
              zeroRecords: "Nenhum registro encontrado",
              infoEmpty: "No entries to show",
              sEmptyTable: "Não há subgrupo_prods cadastrados!",
              sDefaultContent: '',
              info: "Mostrando de _START_ até _END_ de _TOTAL_ registros",
              infoEmpty: "Mostrando 0 até 0 de 0 registros",
              infoFiltered: "(Filtrados de _MAX_ registros)",
              search: "<div class=\"input-group\" style='width: 100%;'>_INPUT_<span class=\"input-group-addon\" style='width: auto;'><i class=\"fa fa-search\"></i></span></div>",
              paginate: {
                  "next": "Próximo",
                  "previous": "Anterior",
                  "first": "Primeiro",
                  "last": "Último"
              },
              lengthMenu: "_MENU_",
              processing: "Processando..."
          }
      });*/
    function swalDelete(id) {
        new swal({
            title: 'Excluir subgrupo_prod',
            text: "Deseja realmente excluir este subgrupo_prod?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não',
            allowOutsideClick: false,
        }).then((result) => {
            if (result) {
                swal(
                    'Excluido!',
                    'subgrupo_prod excluido com sucesso.',
                    'success'
                );
                window.location.href = 'delete.php?id=' + id;
            }
        })
    }

  
   $('[data-tooltip="tooltip"]').tooltip();
</script>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <script src="../assets/js/main.js"></script> 
 


</body>

</html>