<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="cCadastro.php" method="POST">
    NOME:
    <input type="text" name="nome"></br>
    EMAIL:
    <input type="email" name="email"></br>
    SENHA:
    <input type="password" name="senha"></br>
    CONFIRMAR SENHA:
    <input type="password" name="senhaconf"></br>
    SETOR:
    <select name="setor" value="setor"></br>
        <option value="...">...</option>
    <option value="Ti">Ti</option>
    <option value="Diretor">Diretor</option>
    <option value="Coordenador">Coordenador</option>
    <option value="Professor">Professor</option>
    
    </select>
</br>
CURSO:
    <select name="curso" value="curso">
        <option value="...">...</option>
        <option value="TADS">TADS</option>
        <option value="PSICOLOGIA">PSICOLOGIA</option>
        <option value="DIREITO">DIREITO</option>
        <option value="CIENCIA POLITICA">CIENCIA POLITICA</option>
    </select></br>
    <input type="submit" name="enviar" value="CADASTRAR">
    <input type="reset" name="limpar" value="Limpar">
</body>
</html>