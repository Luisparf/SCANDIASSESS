<?php
include_once("../database.php");

function index_sgp($table=null, $id=null){
    global $subgrupo_prods;
    $subgrupo_prods = find_all('tbl_subgrupo_produtos',$id);
}

function add()
{
    if (!empty($_POST['subgrupo_prod'])) {
        $subgrupo_prods = $_POST['subgrupo_prod'];
        //  var_dump($subgrupo_prods);
        //die;
        save('tbl_subgrupo_produtos', $subgrupo_prods);
        if ($_POST['action'] == 'Salvar') {
            header('location: index.php');
        }elseif ($_POST['action'] == 'Salvar e Novo') {
            header('location: add.php');
        }
    }
}

function delete($id = null) {
    remove('tbl_subgrupo_produtos', $id);
    header('location: index.php');
}

function edit()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['subgrupo_prod'])) {
            $subgrupo_prods = $_POST['subgrupo_prod'];
           
            update('tbl_subgrupo_produtos', $id, $subgrupo_prods);
            header('location: index.php');
        } else {
            global $subgrupo_prods;
            $subgrupo_prods = find('tbl_subgrupo_produtos', $id);
            //update('tbl_subgrupo_produtos', $id, $subgrupo_prods);
            //header('location: index.php');
        }
    } else {
        header('location: index.php');
    }
}



?>



