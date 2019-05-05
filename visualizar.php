<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>ABDV Usuários cadastrados</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>
<body>
<?php
include_once("menu.php");
?>
<div class="container">
    <h2 class="text-center m-2">Lista de Associados</h2>
    <table class="table table-striped m-4">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">telefone</th>
            <th scope="col">RG</th>
            <th scope="col">CPF</th>
            <th scope="col">E-mail</th>
            <th scope="col">Trabalha</th>
            <th scope="col">Profição</th>
        </tr>
        </thead>
        <?php
        //incluindo o arquivo de conexão.
        include_once "conectar.php";
        //variável que pega as informações do banco.
        $sql = "SELECT * FROM associados";
        //executa as informações e armazena.
        $resultado = mysqli_query($conn, $sql);
        //Verifica se retornou registro.
        if(mysqli_num_rows($resultado)){
//Enquanto estiver buscando registro na variável.
            while($array = mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td><?=$array['nome']?></td>
                    <td><?=$array['endereco']?></td>
                    <td><?=$array['telefone']?></td>
                    <td><?=$array['rg']?></td>
                    <td><?=$array['cpf']?></td>
                    <td><?=$array['email']?></td>
                    <td><?=$array['trabalha']?></td>
                    <td><?=$array['tipo']?></td>
                </tr>
                <?php
            }//aqui tem uma chave
        }//aqui tem outra chave
        ?>
    </table>
</div>
</body>
</html>
