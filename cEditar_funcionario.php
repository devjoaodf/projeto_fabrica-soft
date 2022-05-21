<?php
$funcionario = $_POST['nome'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$setor = $_POST['setor'];


$conexao = mysqli_connect("localhost", "root", "", "rematricula");
if($conexao){
    echo"conexão sucesso";
}
else{
    echo"conexão failed";
}

$sql = "UPDATE usuario SET nome = '$funcionario',";
$sql .= " email = '$email', setor = '$setor', curso = '$curso'";
$sql .= " WHERE idUsuario = " . $_POST['id'];
$resultado = mysqli_query($conexao, $sql);
if($resultado){
    header("Location: index.php");
}

?>