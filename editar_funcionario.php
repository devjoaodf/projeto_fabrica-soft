<?php
print_r($_GET);
$a = $_GET['a'];

$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "SELECT * FROM usuario";
$sql .= " WHERE idUsuario = " . $a;
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>
<html>
<body>
    <head>
        <title>Editar</title>
        <meta charset="utf-8">
    </head>
</body>
<h1 style="text-align:center;"> Editar dados do funcionario</h1>
<form action="cEditar_funcionario.php" method="POST">
    <?php echo $arResultado['idUsuario'] ?>
<input type="hidden" name="id" value="<?php echo $arResultado['idUsuario']?>">
Funcionario:
<input type ="text" name="nome" value="<?php echo $arResultado['nome']?>"><br><br>
Email:
<input type ="text" name="email" value="<?php echo $arResultado['email']?>"><br><br>

SETOR:
    <select name="setor" value="setor"></br>
     <option value="..."><?php echo $arResultado['setor']?></option>
    <option value="Ti">Ti</option>
    <option value="Diretor">Diretor</option>
    <option value="Coordenador">Coordenador</option>
    <option value="Professor">Professor</option>
    </select><br><br>

Curso:
 <select name="curso" value="curso"><br>
        <option value=".."><?php echo $arResultado['curso']?></option>
        <option value="TADS">TADS</option>
        <option value="PSICOLOGIA">PSICOLOGIA</option>
        <option value="DIREITO">DIREITO</option>
        <option value="CIENCIA POLITICA">CIENCIA POLITICA</option>
    </select></br>
<input type ="submit" name="Enviar" value="Enviar"><br><br>
<input type="reset" name="Limpar" value="retorna ao valor original">





</form>




</html>
