<?php
class homeController extends Controller {

    private $user;

    public function __construct() {
        parent ::__construct();

        $this->user = new Users();
        if(!$this->user->checkLogin()){
            header("Location: ".BASE_URL."login");
            exit;
        }
    }

    public function index() {
        $data = array(
            'menu' => array(
                BASE_URL.'home/add' => 'Adicionar Produto',
                BASE_URL.'relatorio' => 'Relatorio',
                BASE_URL.'login/sair' => 'sair'
            )
        );

        $p = new Products();

        $s = '';

        if(!empty($_GET['busca'])){
            $s = $_GET['busca'];
        }

        $data['list'] = $p->getProducts($s);

        $this->loadTemplate('home', $data);
    }

    public function add() {
        $data = array();
        $p = new Products();

        if(!empty($_POST['cod'])) {
            $cod = $_POST['cod'];
            $name = $_POST['name'];
        }
    }

}