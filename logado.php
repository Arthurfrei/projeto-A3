<?php

include('conexao.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "select nome, login, senha from login where login = '$login' and senha = '$senha'";
$query = mysqli_query ($conexao, $select);
$dados = mysqli_fetch_row ($query);

if ($login == $dados[1] && $senha == $dados[2]){
    echo "conectado";
}else{
    echo "dados inválidos";
}

?>
<html>
<head>
 <meta....>
 <meta....>
 <link rel = "stylesheet" type = "text/css" href = "estilo.css">
</head>
<body>
<a href = "sair.php">sair</a>
</body>
</html>