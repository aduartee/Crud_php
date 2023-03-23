<?php
   //Chamando o arquivo de conexão o banco atraves da função include
    include 'conecta.php';

    //Guarda os dados dos inputs em varivaveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $esporte_preferido = $_POST['esporte_preferido'];
    $cor_preferida = implode(", ", $_POST['cor_preferida']); //atribui a variavel, mas a função "implode" transforma tudo em uma unica string e sepera elas por virgula
    


    //Insere na tabela os dados coletados acima
    $query = $conn->query("INSERT INTO pessoas (nome, email, telefone, esporte_preferido, cor_preferida) VALUES ('$nome', '$email', '$telefone', '$esporte_preferido', '$cor_preferida')");

    //Caso a inserção for realizada com sucesso, redireciona para a pagina principal
    if($query) {
        header('Location: index.php');
    //Se não, retorna uma erro de registro
    } else {
        echo "Erro ao adicionar novo registro.";
    }
?>