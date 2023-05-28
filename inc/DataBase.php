<?php
// database.php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
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


    public function executeQuery($query, $params = []) {
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $this->conn->error);
        }

        if (!empty($params)) {
            $stmt->bind_param(...$params);
        }

        $stmt->execute();

        if ($stmt->error) {
            die("Execution failed: " . $stmt->error);
        }

        $result = $stmt->get_result();

        $stmt->close();

        return $result;
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

    public function save($table, $data) {

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
                    if ($this->conn->query($sql)) {
                        $_SESSION['message'] = 'Registro cadastrado com sucesso.';
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

            $return = $this->conn->insert_id;
            return $return;
        }

}
