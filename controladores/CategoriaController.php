<?php 
require_once 'models/categoria.php';
require_once 'models/producto.php';
class categoriaController{
    public function index(){
        Utils::isAdmin();
        $categoria =new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categorias/index.php';
    }
    public function ver(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			// Conseguir categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria = $categoria->getOne();
			
			// Conseguir productos;
			$producto = new Producto();
			$producto->setCategoria_id($id);
			$productos = $producto->getAllCategory();
		}
		
		require_once 'views/categorias/ver.php';
	}

    public function crear(){
        Utils::isAdmin();
        require_once 'views/categorias/crear.php';
    }

    public function save(){
        Utils::isAdmin();
        if(isset($_POST) && isset($_POST['nombre'])){

			// Guardar la categoria en bd
			$categoria = new Categoria();
			$categoria->setNombre($_POST['nombre']);
			$save = $categoria->save();

           /* mostrar este teo de categoria creada correctamente */
                if($save){
                    $_SESSION['category'] = "complete";
                }else{
                    $_SESSION['category']= "failed";
                }
         /* mostrar este teo de categoria creada correctamente */

        }
        header("Location:".base_url."categoria/index");
    }
    
}

?>