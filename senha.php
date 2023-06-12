
<?php
include ("conexao.php");
$login = isset($_POST['login'])? $_POST['login']:'';
$senha = isset($_POST['senha'])? $_POST['senha']:'';
$senha_nova = isset($_POST['senha_nova'])? $_POST['senha_nova']:'';

$update = "UPDATE login SET senha='$senha_nova' WHERE login='$login' and senha='$senha'";
$query = mysqli_query ($conexao, $update);

?>

<html>
<head>
 <meta....>
 <meta....>
 <link rel = "stylesheet" type = "text/css" href = "estilo.css">
</head>
<body>
    <center>      
    <h2>senha alterada com sucesso</h2>
    <a href = "index.php">voltar</a>
    </center>
</form>
</body>
</html>