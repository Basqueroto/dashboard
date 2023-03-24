<?php
include("../config/cabecalho.php");
?>
<div id="cad">
        <nav id="cad-nav">
            <a href="index.php">Voltar</a>
        </nav>
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="signup">
        <form class="imp" method="POST">
            <label for="chk" aria-hidden="true">Cadastre-se</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" required="">
            <input type="number" name="cpf" id="cpf" placeholder="CPF" required="">
            <input type="email" name="email" id="email" placeholder="Email" required="">
            <input type="text" name="login" id="login" placeholder="login" required="">
            <input type="password" name="senha" id="senha" placeholder="Senha" required="">
            <button class="cads">Sign up</button>
        </form>
    <?php
        include("../conexao.php");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $senha = $_POST["senha"];

            $sql ="INSERT INTO usuario (nome, email, cpf, senha) VALUES (:nome, :email, :cpf, :senha) ";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":cpf", $cpf);
            $stmt->bindValue(":senha", $senha);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                echo"<div class='sucess'>usuario cadastrado com sucesso</div>";
            }else{
                echo"<div class='error'> falha ao registrar o usuario</div>";
            }

            $conexao = null;
        }
    ?>