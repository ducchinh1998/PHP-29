<?php
require_once('Model/Category.php');
require_once('Controller/BaseController.php');

class CategoryController extends BaseController {
    var $model;
		public function __construct(){
			$this->model = new Category();
		}

    public function index() {
        // echo "CategoryController->index";
        $category = new Category();

        $categories = $category->getList();
        $this->view('categories/list.php',[
            'categories' => $categories,
        ]);


        //require_once('Views/categories/list.php');
    }
    public function detail(){
        $id = $_GET['id'];
        $category = $this->model->find($id);
        $this->view('categories/detail.php',[
            'category' =>$category,
        ]);

    }

    

    //Hiển thị ra form tạo mới
    public function create(){
        $this->view('categories/create.php');
    }

    //Luu tru du lieu nguoi dung tao ra
    public function store(){
        $data = $_POST;
			$target_dir = "assets/uploads/";  // thư mục chứa file upload

	        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
	        
	        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
	        	$img = array('thumbnail' => $_FILES["thumbnail"]["name"]);
	        	$data = array_merge($data, $img);
	        } else { // Upload file có lỗi 
	        	echo "Sorry, there was an error uploading your file.";
	        }

            $success = $this->model->create($data);
			// if ($success) {
			// 	setcookie('success','Thêm mới thành công',time()+10);
			// }else{
			// 	setcookie('error','Thêm mới thất bại',time()+10);
			// }

        // $this->redirect(index.php?mod=category&act=index);
        header("Location:index.php?mod=category&act=index");
        
    }

}



?>