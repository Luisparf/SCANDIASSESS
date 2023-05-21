<?php

require_once('database.php');
//Conectando ao banco de dados
$con = open_database(); // SOON
if (isset($_POST['cpf_cnpj'])) {
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $cpf_cnpj = str_replace('/', '', str_replace('-', '', str_replace('.', '', $cpf_cnpj)));
    $qryLista = mysqli_query($con, "SELECT NOME FROM tbl_fornecedores WHERE cpf_cnpj =  + $cpf_cnpj");

    while ($resultado = mysqli_fetch_assoc($qryLista)) {
        $vetor[] = $resultado;
    }
    echo json_encode($vetor);
}