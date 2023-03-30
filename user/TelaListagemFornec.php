<?php
include("../config/cabecalho.php");
include("../config/conexao.php");

$sql = "SELECT id, nome, razao_social, cnpj, email, contato, idUsuario FROM fornecedores";

$result = $conexao->query($sql);


if($result->rowCount () > 0){
    echo "<table border=1>";
    echo" 
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>razão social</th>
        <th>cnpj</th>
        <th>email</th>
        <th>contato</th>
        <th>idUsuario</th>
        <th>editar</th>
        <th>deletar</th>
    </tr> ";

    foreach($result as $row){
    echo"<tr>";
    echo"<td>" .$row["id"] ."</td>";
    echo"<td>" .$row["nome"] ."</td>";
    echo"<td>" .$row["razao_social"] ."</td>";
    echo"<td>" .$row["cnpj"] ."</td>";
    echo"<td>" .$row["email"] ."</td>";
    echo"<td>" .$row["contato"] ."</td>";
    echo"<td>" .$row["idUsuario"] ."</td>";
    echo'<td><a href="telaeditar.php?id='.$row['id'].'">editar</a></td>';
    echo'<td><a href="deletarFornec.php?id='.$row['id'].'">excluir</a></td>';
    echo"</tr>";

    }
    echo"</table>";
}else{
    echo"nenhum dado encontrado";
}

include("../config/rodape.php");