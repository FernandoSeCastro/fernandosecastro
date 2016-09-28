<?php
require_once 'model/grupo.php';
require_once 'model/grupo.php';

class GrupoController{
    
    private $model;
    public function __CONSTRUCT()
    {
        $this->model = new grupo();
    }
    
    //chamando o index principal
    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/grupo/grupo.php';
        require_once 'view/footer.php';     
    }
    
    public function Selecionar()
    {
        $gru = new grupo();
        if(isset($_REQUEST['grupo']))
        {
            $gru = $this->model->Selecionar($_REQUEST['grupo']);
        }
        require_once 'view/header.php';
        require_once 'view/grupo/grupo-editar.php';
        require_once 'view/footer.php';
    }
    public function Novo()
    {
        $gru = new grupo();

        require_once 'view/header.php';
        require_once 'view/grupo/grupo-novo.php';
        require_once 'view/footer.php';
    }

    public function Inserir(){
        $gru = new grupo();
        $gru->descricao = $_REQUEST['descricao'];
        $gru->ativo = $_REQUEST['ativo'];

        $this->model->Cadastrar($gru);

        header('Location: index.php?c=grupo');
    }

    public function Editar(){
        $gru = new grupo();
        $gru->grupo = $_REQUEST['grupo'];
        $gru->descricao = $_REQUEST['descricao'];
        $gru->ativo     = $_REQUEST['ativo'];

        $this->model->Atualizar($gru);
        header('Location: index.php?c=grupo');
    }

    public function Excluir(){
        $this->model->Delete($_REQUEST['grupo']);
        header('Location: index.php?c=grupo');
    }
}