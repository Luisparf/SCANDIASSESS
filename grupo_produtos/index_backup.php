<!DOCTYPE html>
<html  style="overflow-x: hidden;">
<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

require_once('../login/verifica_login.php');

if (!isset($_SESSION)) {
	session_start();
  
}
$_SESSION['type'] = 'dange';
$_SESSION['message'] = 'message';

require_once('functions.php');
index_gp();

?>  

  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- Header -->
  <?php include "../html/header.php" ?>
  <!-- End Header -->

  <!-- Sidebar -->
  <?php include "../html/sidebar.php" ?>
  <!-- end Sidebar-->

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
      <h1>Cadastro Grupos</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../dashboard">Início</a></li>
          <li class="breadcrumb-item">Cadastros</li>
          <li class="breadcrumb-item active">Grupos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section" >
      <div class="row" id="row-grupo">
        <div class="col-lg-6">

          <div class="card" id="card-grupo">
            <br>
              <a style="width:120px; margin: 0 0 10px 10px" class="btn btn-success" href="add.php"><i class="fa fa-plus"></i> Grupo</a>
            
              <!-- Default Table -->
              <table id="vendas" class="table datatable" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Código</th>
                    <th scope="col">Data da Criação</th>
                  </tr>
                </thead>

                <tbody>
 
                <?php foreach ($grupos as $grupo){?>
                <tr>
                    <td><?php echo $grupo['id']; ?></td>
                    <td><?php echo $grupo['nome']; ?></td>
                    <td><?php echo $grupo['codigo']; ?></td>
                    <td><?php echo $grupo['criadoEm']; ?></td>
                    <td class="actions text-right rowlink-skip">
                        <span style="white-space:nowrap;">
                        <a href="view.php?id=<?php echo $grupo['id']; ?>" class="btn btn-xs btn-success" data-tooltip="tooltip" title="Visualizar" style="width:2em;margin-bottom: 2px;"><i class="fa fa-eye"></i></a>
                        <a href="edit.php?id=<?php echo $grupo['id']; ?>" class="btn btn-xs btn-warning" data-tooltip="tooltip" title="Editar"style="width:2em;margin-bottom: 2px;" ><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-xs btn-danger" data-tooltip="tooltip" title="Excluir" style="width:2em;margin-bottom: 2px;" onclick="swalDelete(<?php echo $grupo['id']; ?>)"><i class="fa fa-trash"></i></a>
                        </span>
                    </td>
                </tr>
            <?php } ?> 
                </tbody>
                
              </table>
              
              <!-- End Default Table Example -->
            </div>
            
          </div>
         </div>
        </div>
       
    </section>
</main>
<?php include "../html/footer.php" ?>

<script type="text/javascript">
    if("danger" === '<?php echo $_SESSION['type'] ?>'){
        toastr.error('<?php echo $_SESSION['message'] ?>');
    }else if("success" === '<?php echo $_SESSION['type'] ?>'){
        toastr.success('<?php echo $_SESSION['message'] ?>');
    }
   <?php unset($_SESSION['message']); unset($_SESSION['type']); ?>
      $('#vendas').DataTable({
          "bFilter": true,
          "bPaginate": true,
          "bSort": true,
          responsive: true,
          language: {
              zeroRecords: "Nenhum registro encontrado",
              infoEmpty: "No entries to show",
              sEmptyTable: "Não há grupos cadastrados!",
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
      });
    function swalDelete(id) {
        new swal({
            title: 'Excluir grupo',
            text: "Deseja realmente excluir este grupo?",
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
                    'grupo excluido com sucesso.',
                    'success'
                );
                window.location.href = 'delete.php?id=' + id;
            }
        })
    }
    
   $('[data-tooltip="tooltip"]').tooltip();
</script>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</html>