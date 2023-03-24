<?php
include("config/cabecalho.php");
?>
<div id="cad">
        <nav id="cad-nav">
            <a href="index.php">Voltar</a>
        </nav>
    <div class="signup">
        <form class="imp" method="POST">
            <label for="chk" aria-hidden="true">Cadastre-se</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" required="">
            <input type="text" name="razao" id="razao" placeholder="razão social" required="">
            <input type="number" name="cnpj" id="cnpj" placeholder="cnpj" required="">
            <input type="email" name="email" id="email" placeholder="Email" required="">
            <input type="number" name="contato" id="contato" placeholder="contato" required="">
            <input type="password" name="senha" id="senha" placeholder="Senha" required="">
            <button class="cads">Sign up</button>
        </form>
    <?php
        include("config/conexao.php");

        session_start();

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $razao = $_POST["razao"];
            $cnpj = $_POST["cnpj"];
            $email = $_POST["email"];
            $contato = $_POST["contato"];
            $idUsuario = $_SESSION['usuario']['id'];
            echo $idUsuario;

            $sql ="INSERT INTO fornecedores (nome, razao_social, cnpj, email, contato, idUsuario) VALUES (:nome, :razao, :cnpj, :email, :contato, :idUsuario) ";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":razao", $razao);
            $stmt->bindValue(":cnpj", $cnpj);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":contato", $contato);
            $stmt->bindValue(":idUsuario", $idUsuario);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                echo"<div class='sucess'>usuario cadastrado com sucesso</div>";
            }else{
                echo"<div class='error'> falha ao registrar o usuario</div>";
            }

            $conexao = null;
        }
    ?>
</div>
<?php 
    include("config/rodape.php");
?>    