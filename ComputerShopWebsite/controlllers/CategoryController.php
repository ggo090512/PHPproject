
<?php 
require_once('models/Category.php');
require_once('controlllers/AdminController.php');


class CategoryController extends AdminController
{
	public function index(){
		$categorymodel = new Category();
		
		if (isset($_POST['category_name'])) {
			$id = $_POST['category_name'];
		
			$categories = $categorymodel->findCategoriesAdmin($id);
			
		} else {
			$categories = $categorymodel->getList();
		}
	
		require_once('Views/categories/list.php');
	}

	public  function create(){
		$this->view('categories/create.php');
	}

	public  function store(){
		$data = $_POST;
		$data['status'] = 1;
		$data['category_slug'] =to_slug($data['category_name']) . strtotime(date('Y-m-d H:i:s'));
		
	        $category= new Category();
	      
	        $success = $category->create($data);
	        if ($success) {
	        	setcookie('success','Thêm mới thành công',time()+1);
	        }
	        $this->redirect('index.php?mod=category&act=index');
	    }

	    public function xoa1(){
	    	$id =(isset($_GET['id'])?$_GET['id']:0);
	    	$category= new Category();
	    	$delete = $category->xoa($id);
	    	if ($delete) {
	    		setcookie('delete','Xóa thành công',time()+1);
	    	}
	    	$this->redirect('index.php?mod=category&act=index');
	    }

	    public function edit(){
	    	$id = $_GET['id'];
	    	$category= new Category();
	    	$success = $category->find($id);
	    	require_once('Views/categories/edit.php');
	    }

	    public function update(){
	    	$data =$_POST;
	    	$data['category_slug'] = to_slug($data['category_name']) . strtotime(date('Y-m-d H:i:s'));

	        $category= new Category();

	        $update =$category->update($data);
	        if ($update) {
	        	setcookie('update','Cập nhật thành công',time()+1);
	        }
	        header('Location:index.php?mod=category&act=index');
	    }
	}

	?>
