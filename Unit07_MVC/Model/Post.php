<?php 
require_once('Model/Query.php');
class Post extends Query {
    public $table = 'posts';

    public function getList(){
        // echo 'Get List';
        $post = $this->select($this->table,['title','description','thumbnail','content','slug','view_count','user_id','category_id','created_at']);
        return $post;
    }

    public function find($id){
        $category = "select * from ".$this->table." where id =".$id;
        $connection = new Connection();
        // echo $category;
        // die();

        return $connection->conn->query($category)->fetch_assoc();
        
    }
    public function create($data){
        $sql = "INSERT INTO posts (title,description,thumbnail,content,slug) 
        VALUES ('".$data['title']."','".$data['description']."', '".$data['thumbnail']."','".$data['content']."','".$data['slug']."')";
       
       $connection = new Connection();
    //    echo $sql;
    //    die();
        return $connection->conn->query($sql);
        
    }
}



?>