<?php

include("../config/conexao.php");

if(!isset($_GET['id'])){
    die("usuario nao existe");
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$login = $_POST['login'];
$email = $_POST['senha'];


if(isset($id) && isset($nome) && isset($cpf) && isset($email) && isset($login) && isset($senha)){
    $sql = "UPDATE usuarios SET nome = :nome, cpf = :cpf, email = :email, login = :login, senha = :senha
    WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":cpf", $cpf);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":login", $login);
    $stmt->bindValue(":senha", $senha);
    $stmt->execute();

    header("Location: TelaListagemUser.php");
    exit();
}else{
    die("Dados do formulario nao prenchido");
}