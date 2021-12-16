<?Php 
class HomeController
{

    public function index(){
        echo "Home index";
        require_once('Views/home/index.php');
    }
}



?>