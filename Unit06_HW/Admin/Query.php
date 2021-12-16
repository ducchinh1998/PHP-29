<?php 
require_once('Connection1.php');
class Query {
    private $conn;

    public function __construct(){
        $connection = new Connection();
        $connection->password = '';
        $this->conn = $connection->conn;
    }
        public function select($table,$columns = '*'){
            
            if ($columns == '*') {
                $query = "SELECT * FROM " . $table;
            }elseif (is_array($columns)) {
                $sub_string = '';
                foreach ($columns as $i =>$column) {
                    $sub_string .= '`'.$column . '`';
    
                    if ($i + 1 != count($columns)) {
                        $sub_string .= ',';
                    }
                }
    
                $query = "SELECT " . $sub_string . " FROM " . '`' . $table . '`';
            }else{
                exit();
            }
            
            $result = $this->conn->query($query);
            // Buoc 3
            // Tạo 1 mảng để chứa dữ liệu
            $data = array();
    
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            };
            return $data;
        }
    }



?>