<?php

include ("../config/conexao.php");

if(!isset($_GET['id'])){
    die("id do usuario nao fornecido");
}else{
    $id = $_GET['id'];
    $sql="DELETE FROM produto WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":id",$id);
    $stmt->execute();
}

header("Location: TelaListagemProduct.php");
exit;