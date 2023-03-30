<?php
include("../config/cabecalho.php");
include("../config/conexao.php");

$sql = "SELECT id, nome, categoria, preco, quantidade, data, idFornec, estado FROM produto";

$result = $conexao->query($sql);

if($result->rowCount () > 0){
    echo "<table border=1>";
    echo" 
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>categoria</th>
        <th>preço</th>
        <th>quantidade</th>
        <th>data</th>
        <th>id fornecedor</th>
        <th>estado</th>
        <th>editar</th>
        <th>deletar</th>
    </tr> ";

    foreach($result as $row){
    echo"<tr>";
    echo"<td>" .$row["id"] ."</td>";
    echo"<td>" .$row["nome"] ."</td>";
    echo"<td>" .$row["categoria"] ."</td>";
    echo"<td>" .$row["preco"] ."</td>";
    echo"<td>" .$row["quantidade"] ."</td>";
    echo"<td>" .$row["data"] ."</td>";
    echo"<td>" .$row["idFornec"] ."</td>";
    echo"<td>" .$row["estado"] ."</td>";
    echo'<td><a href="telaeditar.php?id='.$row['id'].'">editar</a></td>';
    echo'<td><a href="deletarProduct.php?id='.$row['id'].'">excluir</a></td>';
    echo"</tr>";

    }
    echo"</table>";
}else{
    echo"nenhum dado encontrado";
}

include("../config/rodape.php");