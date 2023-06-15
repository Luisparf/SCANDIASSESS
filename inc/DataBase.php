<?php
// // database.php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(0);
class Database {

    private $conn;
    const DB_NAME = 'scandiweb';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_HOST = 'localhost';

    public function __construct() {
        try {
            $this->conn = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);
            if ($this->conn->connect_error) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                return null;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn->close();
    }

    public function generateError($num){
        if ($num == '1064') {
            return "Falha no cadastro, caracter proibido, não utilize carateres especiais";
        } else {
            return "Falha no cadastro, por favor contate-nos e envie este codigo de erro: " . $num;
        }
    }

    public static function remove( $table = null, $ids=null ) {
        $db = new self();
        try {
            if ($ids) {
                foreach($ids as $id){
                    // $id = intval($item['id']);
                    $query = "DELETE FROM " . $table . " WHERE id = " . $id;
                    $update = $db->conn->prepare($query) or die($db->conn->error);
                    $update->execute();
                }
                //die;
                if ($result = $db->conn->query($query)) {
                    $_SESSION['message'] = "Register removed successfully";
                    $_SESSION['type'] = 'success';
                }
            }
        }catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        $db->closeConnection();
    }

    public static function store($table, $data) {

        $db = new self();
        $columns = $values = null;

        foreach ($data as $key => $value) {
            $columns .= trim($key, "'") . ",";
            if ($data[$key] == '') {
                $values .= "NULL,";
            } else {
                $values .= "'$value',";
            }
        }
        $columns = rtrim($columns, ',');
        $values = rtrim($values, ',');
        $sql = "INSERT INTO $table($columns) VALUES ($values);";

        try {
            if ($table) {
                if ($db->conn->query($sql)) {
                    $_SESSION['message'] = 'Register stored succesfully.';
                    $_SESSION['type'] = 'success';
                } else {
                    // $_SESSION['message'] = generateError(mysqli_errno($this->conn));
                    $_SESSION['type'] = 'danger';
                }
            } else {
                // $_SESSION['message'] = generateError(mysqli_errno($this->conn));
                $_SESSION['type'] = 'danger';
            }
        } catch (Exception $e) {
            $_SESSION['message'] = strval($e);
            $_SESSION['type'] = 'danger';
        }

        $return = $db->conn->insert_id;
        $db->closeConnection();
        return $return;
    }

    public static function get($table = null){
        $db = new self();
        $found = null;
        try {
            $sql = "SELECT * FROM $table ORDER BY id DESC";
            $result = $db->conn->query($sql);
            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }

        } catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        $db->closeConnection();
        return $found;
    }

    public static function find($table = null, $column = null, $field = null){
        $db = new self();
        $found = null;
        try {
            $sql = "SELECT * FROM $table WHERE $column = '$field'";
            $result = $db->conn->query($sql);
            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        $db->closeConnection();
        return $found;
    }

    public static function executeQuery($sql = null, $all = true) {
        $db = new self();
        $found = null;
        try {
            if(isset($sql)){
                $result = $db->conn->query($sql);
                if($result->num_rows > 0)
                    $found = ($all ? $result->fetch_all(MYSQLI_ASSOC) : $result->fetch_assoc());
            }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }

        $db->closeConnection();
        return $found;
    }

    public static function findSKU($sku){
            // var_dump($sku);
            // die();
        return self::executeQuery("SELECT sku FROM products WHERE sku = '" . $sku ."'");
    }

}
