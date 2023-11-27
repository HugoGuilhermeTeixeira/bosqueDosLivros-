<?php
    // Incluir o arquivo de conexão com o banco de dados
    include("connect.php");
    // Receber os dados do formulário
    $nome = $_POST["nome"];
    $cpf  = $_POST["cpf"];
    $datanascimento = $_POST["datanascimento"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    // Verificar se o usuário já existe
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($resultado) > 0) { 
    echo "O usuário já existe.";
} else { 
     // O usuário não existe, então cadastrar
    $sql = "INSERT INTO usuarios (nome, cpf, email, senha, datanascimento) VALUES ('$nome', '$cpf', '$email', '$senha','$datanascimento')";
    mysqli_query($mysqli, $sql);
    //redirecionar pra pagina de login
    header("Location: login.php");
}


?>