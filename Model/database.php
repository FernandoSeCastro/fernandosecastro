<?php
//função para conexão com o banco de dados do PostgreSql

class Database
{
	public static function Conectar()
	{
        $pdo = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u579165536_teste;charset=utf8', 'u579165536_fer', '123456');
        //Retornando o erro da conexão
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}