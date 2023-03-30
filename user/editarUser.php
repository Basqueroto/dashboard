<?php
include("../config/cabecalho.php");
include("../config/conexao.php");

if(!isset($_GET['id'])){
    die("ID usuario invalido");
}

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$row){
    die("usuario nao encontrado");
}
?>

<div class="container">
    <h1>Edicao de usuario</h1>
    <form action="<?php echo "AtualizaUser.php?id=($id)" ?>" method="POST">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">


        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Informe seu nome" required value="<?php echo $row['nome'] ?>">

        <label for="cpf">Cpf</label>
        <input type="text" name="cpf" id="cpf" placeholder="Informe seu cpf" required value="<?php echo $row['cpf'] ?>">

        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" placeholder="Informe seu email" required value="<?php echo $row['email'] ?>">

        <label for="login">login</label>
        <input type="text" name="login" id="login" placeholder="Informe seu login" required value="<?php echo $row['login'] ?>">

        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha" placeholder="Informe sua senha" required value="<?php echo $row['senha'] ?>">

        <button type="submit">Atualizar</button>

    </form>
</div>

<?php
include("../config/rodape.php")
?>