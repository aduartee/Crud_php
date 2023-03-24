<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/adiciona.css"> 
    <title>Crud Arthur</title>
</head>
<body>
    <div id="quadrado"> 
        <h2 id="titulo"> Adicionando usuários </h2>
        <form method="POST" action="salvar.php">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="ex: João" required>
                <br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="exemplo@email.com" required>
                <br><br>
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" placeholder="(DD)98989828" required>
                <br><br>

                <label for="esporte_preferido">Esporte Preferido:</label>
                <select id="esporte_preferido" name="esporte_preferido" required>
                    <option value="">Escolha uma opção</option>
                    <option value="futebol">Futebol</option>
                    <option value="volei">Vôlei</option>
                    <option value="basquete">Basquete</option>
                    <option value="natacao">Natação</option>
                </select>
                <br><br>

                <label for="cor_preferida">Cor Preferida:</label></br>
                <input type="checkbox" id="cor_preferida1" name="cor_preferida[]" value="vermelho">
                <label for="cor_preferida1">Vermelho</label>
                <input type="checkbox" id="cor_preferida2" name="cor_preferida[]" value="azul">
                <label for="cor_preferida2">Azul</label>
                <input type="checkbox" id="cor_preferida3" name="cor_preferida[]" value="verde">
                <label for="cor_preferida3">Verde</label></br>
                
                <input type="submit" value="Inserir">
    </div>
    </form>

</body>
</html>