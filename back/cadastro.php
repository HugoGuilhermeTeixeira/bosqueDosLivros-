<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bosque dos livros</title>
</head>
<body>
    <?php
    // Incluir o arquivo de conexão com o banco de dados
    include("conexao.php");
    // Receber os dados do formulário
    $nome = $_POST["nome"];
    $cpf  =$POST["cpf"];
    $datanascimento=$POST["datanascimento"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $planos =$POST["planos"];
    $livros  =$POST["livros"];
    // Verificar se o usuário já existe
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($conexao, $sql);
if (mysqli_num_rows($resultado) > 0) { echo "O usuário já existe.";
} else { 
     // O usuário não existe, então cadastrar
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    mysqli_query($conexao, $sql);
    //redirecionar pra pagina de login
    header("Location: login.php");
}


?>
    
</body>
</html>
