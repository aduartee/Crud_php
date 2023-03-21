<?php
	// Parametros para fazer a conexão com o banco
	$servername = "localhost";
	$username = "root";
	$password = "senha";
	$dbname = "crudphp";

	// Parte responsavel pela conexão com o banco de dados
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Verificação da conexão e sai e retorna uma mensagem caso não ocorra a conexão
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>