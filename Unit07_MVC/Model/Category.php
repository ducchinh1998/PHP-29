<?php 
require_once('Model/Query.php');
require_once('Model/Connection.php');
class Category extends Query {
    public $table = 'categories';

    public function getList(){
        // echo 'Get List';
        $categories = $this->select($this->table,['id','name','thumbnail','description','slug','created_at']);
        return $categories;
    }
    public function find($id){
        $category = "select * from ".$this->table." where id =".$id;
        $connection = new Connection();
        // echo $category;
        // die();

        return $connection->conn->query($category)->fetch_assoc();
        
    }
    public function create($data){
         $sql = "INSERT INTO categories (name,parent_id,thumbnail,description,slug) 
        VALUES ('".$data['name']."','".$data['parent_id']."', '".$data['thumbnail']."','".$data['description']."','".$data['slug']."')";
       
       $connection = new Connection();
    //    echo $sql;
    //    die();
        return $connection->conn->query($sql);
        
    }
}


?>