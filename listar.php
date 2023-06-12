<?php

include_once('conexao.php');

$sql = "SELECT * FROM login ORDER BY login DESC";

$result = $conexao-> query($sql);

?>

<div>
<table class="table">
    <thead>
        <tr>
           
            <th scope="col">nome</th>
            <th scope="col">login</th>
            <th scope="col">senha</th>

        </tr>
    </thead>
    <head>
 <meta....>
 <meta....>
 <link rel = "stylesheet" type = "text/css" href = "estilo.css">
</head>
    <tbody>

    <h1>lista de usuarios</h1>
   
     <?php 
     while($user_data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$user_data['nome']."</td>";
        echo "<td>".$user_data['login']."</td>";
        echo "<td>".$user_data['senha']."</td>";
        echo "<tr>";
 }
 ?>
    </tbody>
</table>
</div>