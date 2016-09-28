<?php
class cliente
{
	private $pdo;
	
	public $cliente;
	public $nome;
	public $telefone;
	public $email;
	public $ativo;
	public $grupo;

	
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Cadastrar(cliente $cliente)
	{
		try
		{
			$sql = "insert into tbl_cliente (nome,telefone,email,ativo,grupo)
					values (?,?,?,?,?)";
			$this->pdo->prepare($sql)
					  ->execute(array(
									  $cliente->nome,
									  $cliente->telefone,
									  $cliente->email,
									  $cliente->ativo,
									  $cliente->grupo
									 )
								);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Listar($pesquisa)
	{
		try
		{
			if($pesquisa=="")
			{
				$stm = $this->pdo->prepare("SELECT cliente,nome,telefone,email,ativo,grupo from tbl_cliente");
				$stm->execute();
			}			
			else
			{
				$stm = $this->pdo->prepare("SELECT cliente,nome,telefone,email,ativo,grupo from tbl_cliente where nome like '%$pesquisa%' or telefone like '%$pesquisa%'");
				$stm->execute();
			}			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Selecionar($cliente)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT cliente,nome,telefone,email,ativo,grupo FROM tbl_cliente WHERE cliente = ?");
			$stm->execute(array($cliente));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Atualizar($cliente)
	{
		try
		{
			$sql = "update tbl_cliente set
					nome = ?,
					telefone =?,
					email =?,
					ativo = ?,
					grupo =?
					where
					cliente = ?";
			$this->pdo->prepare($sql)
			          ->execute(array(
									  $cliente->nome,
									  $cliente->telefone,
									  $cliente->email,
									  $cliente->ativo,
									  $cliente->grupo,
									  $cliente->cliente
									  ) );			
		} 
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Delete($cliente)
	{
		try
		{
			$this->pdo->prepare("DELETE FROM tbl_cliente WHERE cliente = ?")->execute(Array($cliente));
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}	
}