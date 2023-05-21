<?php	
/** O nome do banco de dados*/
define('DB_NAME', 'scandiweb');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');
/** nome do host do MySQL */
define('DB_HOST', 'localhost');	

date_default_timezone_set('America/Sao_Paulo');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION)) {
	session_start();
}


function open_database() {
	
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
		if ($conn->connect_error) {
			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
			return null;
		} 

		//echo "conectado com sucesso";	

		//mysqli_set_charset($conn,"utf8");
	} catch (Exception $e) {
		echo $e->getMessage();
	}

	return $conn;
}

function close_database($conn){
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function find($table = null, $id = null, $aux = null){
    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = "SELECT * FROM $table WHERE id = $id";
            $result = $database->query($sql);
            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        
        } else {
            $sql = "SELECT * FROM $table";  
            
            $result = $database->query($sql);
            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
    return $found;
}


function find_all($table=null, $id=null){
    return find($table, $id);
}


function save($table = null, $data = null){
    $database = open_database();
    $columns = $values = null;


    foreach ($data as $key => $value) {
        $columns .= trim($key, "'") . ",";
        //echo $key . ' = ' . $value . ', ';
        if ($data[$key] == '') {
            $values .= "NULL,";
        } else {
            $values .= "'$value',";
        }
    }
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');
   
    $sql = "INSERT INTO $table($columns) VALUES ($values);";
    //echo $sql;
    //die;
    try {
        if ($table) {
            if ($database->query($sql)) {
                $_SESSION['message'] = 'Registro cadastrado com sucesso.';
                $_SESSION['type'] = 'success';
                
            } else {
                $_SESSION['message'] = generateError(mysqli_errno($database));
                $_SESSION['type'] = 'danger';
            }
        
        } else {
            $_SESSION['message'] = generateError(mysqli_errno($database));
            $_SESSION['type'] = 'danger';
        }
    } catch (Exception $e) {
        $_SESSION['message'] = strval($e);
        $_SESSION['type'] = 'danger';
    }
    $return = $database->insert_id;
    close_database($database);
    return $return;
}

function generateError($num){
    if ($num == '1064') {
        return "Falha no cadastro, caracter proibido, não utilize carateres especiais";
    } else {
        return "Falha no cadastro, por favor contate-nos e envie este codigo de erro: " . $num;
    }
}
function remove($table = null, $id = null, $stop = null){
    $database = open_database();
    try {
        if ($id) {
        
            $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
            $sql_S = "SELECT * FROM " . $table . " WHERE id = " . $id;
            
            $result = json_encode($database->query($sql_S)->fetch_assoc());
            $database->query($sql);
            $return = $database->affected_rows;
            if ($return!=-1) {
                $_SESSION['message'] = "Registro Removido com Sucesso.";
                $_SESSION['type'] = 'success';
                /*if(!$stop){
                    $database->query("INSERT INTO Log (`id_empresa`,`id_usuario`,`email`,`date`,`data`,`query`) VALUE ('".$_SESSION['id_empresa']."','".$_SESSION['id_usuario']."','".$_SESSION['email']."','".(new DateTime())->format('Y-m-d H:i')."','".$result."','".$sql."')");
                }*/
            } else {
                $_SESSION['message'] = "Registro não pode ser Removido.";
                $_SESSION['type'] = 'danger';
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
    return $return;
}

/*
function update($table = null, $id = 0, $data = null){
    $database = open_database();
    $items = null;
    

    $sql = "UPDATE $table SET $data WHERE id=$id;";
    $sql_S = "SELECT * FROM $table WHERE id=$id;";
    
    
    try {
        $result = json_encode($database->query($sql_S)->fetch_assoc());
        $database->query($sql);
        $sql = htmlspecialchars(mysqli_real_escape_string($database, $sql), ENT_QUOTES, 'UTF-8');
        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';
        //$database->query("INSERT INTO Log (`id_empresa`,`id_usuario`,`email`,`date`,`data`,`query`) VALUE ('".$_SESSION['id_empresa']."','".$_SESSION['id_usuario']."','".$_SESSION['email']."','".(new DateTime())->format('Y-m-d H:i')."','".$result."','".$sql."')");
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    
    close_database($database);
}*/


function update($table = null, $id = null, $data = null){
    $database = open_database();
    $items = null;
    $atualizadoEm = date('y-m-d h:i:s', time());
    $database->query("UPDATE $table SET atualizadoEm = '$atualizadoEm' WHERE id=$id;");
    foreach ($data as $key => $value) {
        $items .= trim($key, "'");
        $items .= (isset($value) ? "='$value'," : "=NULL,");
    }
    $items = rtrim($items, ',');
    if($database->query("UPDATE $table SET $items WHERE id=$id;")) {
        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';
    } else {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

//open_database();
