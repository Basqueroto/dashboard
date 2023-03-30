<?php
include("../config/cabecalho.php");
include("../config/conexao.php");

$sql = "SELECT id, nome, cpf, email, login FROM usuarios";

$result = $conexao->query($sql);

if($result->rowCount () > 0){
    echo "<table border=1>";
    echo" 
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>cpf</th>
        <th>email</th>
        <th>login</th>
        <th>editar</th>
        <th>deletar</th>
    </tr> ";

    foreach($result as $row){
    echo"<tr>";
    echo"<td>" .$row["id"] ."</td>";
    echo"<td>" .$row["nome"] ."</td>";
    echo"<td>" .$row["cpf"] ."</td>";
    echo"<td>" .$row["email"] ."</td>";
    echo"<td>" .$row["login"] ."</td>";
    echo'<td><a href="editarUser.php?id='.$row['id'].'">editar</a></td>';
    echo'<td><a href="deletarUser.php?id='.$row['id'].'">excluir</a></td>';
    echo"</tr>";

    }
    echo"</table>";
}else{
    echo"nenhum dado encontrado";
}

include("../config/rodape.php");