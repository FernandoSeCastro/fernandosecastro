<?php
class grupo
{
	private $pdo;
	
	public $grupo;
	public $descricao;
	public $ativo;

	
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
	public function Cadastrar(grupo $grupo)
	{
		try
		{
			$sql = "insert into tbl_grupo (descricao,ativo)
					values (?,?)";
			$this->pdo->prepare($sql)
					  ->execute(array(
									  $grupo->descricao,
									  $grupo->ativo
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
				$stm = $this->pdo->prepare("SELECT grupo,descricao,ativo from tbl_grupo");
			}
			else
			{
				$stm = $this->pdo->prepare("SELECT grupo,descricao,ativo from tbl_grupo where descricao like '%$pesquisa%'");
			}
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Selecionar($grupo)
	{
		try
		{
			$stm = $this->pdo->prepare("select grupo,descricao,ativo from tbl_grupo where grupo = ?");
			$stm->execute(array($grupo));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Atualizar($grupo)
	{
		try
		{
			$sql = "update tbl_grupo set
					descricao = ?,
					ativo = ?
					where
					grupo = ?";
			$this->pdo->prepare($sql)
			          ->execute(array(
									  $grupo->descricao,
									  $grupo->ativo,
									  $grupo->grupo
									  ) );			
		} 
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Delete($grupo)
	{
		try
		{
			$stm = $this->pdo->prepare("delete from tbl_grupo where grupo = ?");
			$stm->execute(Array($grupo));
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}	
}