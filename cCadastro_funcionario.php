<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaconf = $_POST['senhaconf'];
$setor = $_POST['setor'];
$curso = $_POST['curso'];

$conexao = mysqli_connect('localhost', 'root','','rematricula');
if($conexao){
    echo"Conexão sucesso";
}
else{
    echo"conexão failed";
}
$sql = "INSERT INTO usuario (nome, email, senha, setor, curso)";
$sql .= " VALUES ('$nome', '$email', '$senha', '$setor', '$curso')";
$resultado = mysqli_query($conexao, $sql);
$arResultado = $resultado;
if($arResultado){
    //echo "<p> Usuário '$nome' cadastrado com sucesso.";
    header("Location: index.php");
}else{
    echo "<p> Falha ao cadastrar usuário. Verifique!";
}
?>