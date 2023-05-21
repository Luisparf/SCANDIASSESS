<?php
include_once("../database.php");

function index_gp($table=null, $id=null){
    global $grupos;
    $grupos = find_all('tbl_grupo_produtos',$id);
}

function add()
{
    if (!empty($_POST['grupo'])) {
        $grupos = $_POST['grupo'];
        var_dump($grupos);
        die;
        save('tbl_grupo_produtos', $grupos);
        if ($_POST['action'] == 'Salvar') {
            header('location: index.php');
        }elseif ($_POST['action'] == 'Salvar e Novo') {
            header('location: add.php');
        }
    }
}

function delete($id = null) {
    remove('tbl_grupo_produtos', $id);
    header('location: index.php');
}

function edit()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['grupo'])) {
            $grupos = $_POST['grupo'];
           
            update('tbl_grupo_produtos', $id, $grupos);
            header('location: index.php');
        } else {
            global $grupos;
            $grupos = find('tbl_grupo_produtos', $id);
            //update('tbl_grupo_produtos', $id, $grupos);
            //header('location: index.php');
        }
    } else {
        header('location: index.php');
    }
}



?>



