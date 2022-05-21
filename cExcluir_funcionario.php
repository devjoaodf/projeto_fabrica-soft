<?php
print_r($_POST);
$id = $_POST['id'];
$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "DELETE FROM usuario WHERE idUsuario = $id";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
    header("Location: index.php");
}
else{
    echo"execução falhou";
}
?>