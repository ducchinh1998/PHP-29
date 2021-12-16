<?php 
require_once('Query.php');
class Category extends Query {
    public $table = 'categories';

    public function getList(){
        // echo 'Get List';
        $categories = $this->select($this->table,['id','name','thumbnail','description','slug','created_at']);
        return $categories;
    }
}


?>