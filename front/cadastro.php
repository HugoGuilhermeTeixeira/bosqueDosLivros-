<?php
if (isset($_POST['submit'])) {
    include("..//back/connect.php");

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $nasc = $_POST['nasc'];

    // Validação e sanitização dos dados (exemplo)
    $nome = mysqli_real_escape_string($conexao, $nome);
    $senha = mysqli_real_escape_string($conexao, $senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $cpf = mysqli_real_escape_string($conexao, $cpf);
    $nasc = mysqli_real_escape_string($conexao, $nasc);

    // Hash da senha (exemplo)
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    try {
        // Utilização de prepared statements
        $stmt = mysqli_prepare($conexao, "INSERT INTO usuarios(nome, senha, email, cpf, nasc) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssss", $nome, $senhaHash, $email, $cpf, $nasc);
        mysqli_stmt_execute($stmt);

        header('Location: login.php');
    } catch (Exception $e) {
        // Tratamento de erros
        echo "Ocorreu um erro ao cadastrar o usuário: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script
    src="https://kit.fontawesome.com/ea97a3051d.js"
    crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCadastros.css">
    <title>Cadastro</title>
</head>
<body>
 <main>
    <header class="header">
        <span class="logo">
          <i class="fa-solid fa-book-bookmark"></i>
          <h3 class="titulo">BOSQUE DOS LIVROS</h3>
        </span>
        <div class="navigations">
          <a id="focused" class="header__link" href="index.html">
            <i class="fa-solid fa-house"></i>HOME
          </a>
          <a class="header__link" href="#experience">
            <i class="fa-solid fa-address-card"></i>SOBRE NÓS</a
          >
          <a class="header__link" href="../index.html#contatos">
            <i class="fa-solid fa-envelope"></i>CONTATOS</a
          >
        </div>
        <a class="header_link_sign" type="submit" href="#signup"> SIGN UP </a>
      </header>
        <div class="box">
            <h1 class="cadastro">CADASTRE-SE</h1>
            <form action="cadastro.php" method="post">
                <input type="text" name="nome" class="nome" placeholder="Nome">
                <input type="text" name="cpf" class="cpf" placeholder="CPF">
                <input type="date" name="nasc" class="nasc" placeholder="DATA DE NASCIMENTO">
                <input type="text" name="email" class="email" placeholder="Email">
                <input type="password" name="senha" class="senha" placeholder="Senha">
                <button name="submit">CADASTRAR</button>
            </form>
        </div>
      </main> 
</body>
<footer>
    <span>
      <h1>Contate-nos</h1>
      <p>Entre contato conosco por estes meios</p>
    </span>
    <div>
      <a target="_blank" href="https://web.whatsapp.com/">
        <i class="fa-brands fa-whatsapp"></i>
        <p>WhatsApp</p>
      </a>
      <a target="_blank" href="https://instagram.com/">
        <i class="fa-brands fa-instagram"></i>
        <p>Instagram</p>
      </a>
      <a target="_blank" href="https://gmail.com/">
        <i class="fa-solid fa-at"></i>
        <p>Gmail</p>
      </a>
      <a target="_blank" href="https://facebook.com/">
        <i class="fa-brands fa-facebook"></i>
        <p>Facebook</p>
      </a>
    </div>
  </footer>

  <script>
    function processPayment(method) {
      alert(`Pagamento via ${method} processado com sucesso!`);
    }
  </script>
</html>
