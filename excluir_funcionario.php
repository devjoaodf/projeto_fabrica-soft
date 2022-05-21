<?php
$id = $_GET['a'];
$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "SELECT * FROM usuario";
$sql .= " WHERE idUsuario = " . $id;

$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
    <body>
        <head>
            <title>Excluir aluno</title>
            <meta charset="utf-8">
        </head>
        <h1 style="text-align:center;">Excluir aluno </h1>
        <form action="cExcluir_funcionario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $arResultado['idUsuario'];?>">
        <?php echo $arResultado['idUsuario'];?>
        Funcionario:
        <?php echo $arResultado['nome']?><br><br>
        Email:
        <?php echo $arResultado['email']?><br><br>
        Setor:
        <?php echo $arResultado['setor']?><br><br>
        Curso:
        <?php echo $arResultado['curso']?><br><br>

        <input type="submit" name="excluir" value="Deseja excluir realmente?"><br><br>
        <a href ="rematriculas.php">Voltar a pagina anterior</a>

</form>
    </body>
</html>