<?php
require_once 'model/cliente.php';
require_once 'model/grupo.php';

class ClienteController{
	
	private $model;
	public function __CONSTRUCT()
	{
		$this->model = new cliente();
        $this->modelgrupo = new grupo();
	}
	
	//chamando o index principal
	public function Index()
	{
		require_once 'View/header.php';
		require_once 'View/cliente/cliente.php';
		require_once 'View/footer.php';		
	}
	
	public function Selecionar()
	{
		$cli = new cliente();
		if(isset($_REQUEST['cliente']))
		{
			$cli = $this->model->Selecionar($_REQUEST['cliente']);
		}
		require_once 'View/header.php';
		require_once 'View/cliente/cliente-editar.php';
		require_once 'View/footer.php';
    }
	public function Novo()
	{
        $cli = new cliente();
        $grup = $this->modelgrupo->Listar("");

        require_once 'view/header.php';
        require_once 'view/cliente/cliente-novo.php';
        require_once 'view/footer.php';
    }

    public function Inserir(){
        $cli = new cliente();
        $cli->nome = $_REQUEST['nome'];
        $cli->telefone = $_REQUEST['telefone'];
        $cli->email = $_REQUEST['email'];
        $cli->ativo = $_REQUEST['ativo'];
        $cli->grupo = $_REQUEST['grupo'];

        $this->model->Cadastrar($cli);

        header('Location: index.php?c=cliente');
    }

    public function Editar(){
        $cli = new cliente();
        $grup = $this->modelgrupo->Listar();

        $cli->cliente  = $_REQUEST['cliente'];
        $cli->nome     = $_REQUEST['nome'];
        $cli->telefone = $_REQUEST['telefone'];
        $cli->email    = $_REQUEST['email'];
        $cli->ativo    = $_REQUEST['ativo'];
        $cli->grupo    = $_REQUEST['grupo'];

        $this->model->Atualizar($cli);
        header('Location: index.php?c=cliente');
    }

    public function Excluir(){
        $this->model->Delete($_REQUEST['cliente']);
        header('Location: index.php');
    }
}