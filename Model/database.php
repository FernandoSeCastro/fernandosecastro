<?php
//função para conexão com o banco de dados do PostgreSql

class Database
{
	public static function Conectar()
	{
        $pdo = new PDO('mysql:host=localhost;dbname=teste;charset=utf8', 'root', '');
        //Retornando o erro da conexão
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}