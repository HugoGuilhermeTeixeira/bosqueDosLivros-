<?php
include('excecoes.php');
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script
    src="https://kit.fontawesome.com/ea97a3051d.js"
    crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header class="header">
        <span class="logo">
          <i class="fa-solid fa-book-bookmark"></i>
          <h3 class="titulo">BOSQUE DOS LIVROS</h3>
        </span>
        <div class="navigations">
          <a id="focused" class="header__link" href="#about">
            <i class="fa-solid fa-house"></i>HOME
          </a>
          <a class="header__link" href="#experience">
            <i class="fa-solid fa-address-card"></i>SOBRE NÓS</a
          >
          <a class="header__link" href="#projects">
            <i class="fa-solid fa-envelope"></i>CONTATOS</a>
        </div>
        <a class="header_link_sign" type="submit" href="#signup"> SIGN UP </a>
      </header>
    <main class="apresentacao">
        <h1 class= "login">FAÇA SEU LOGIN</h1>
        <form method="post" action="Login.aspx">
            <div class="total">
            <label class="login_info" for="username"> CPF:</label>
            <input class= "login_caixa" type="text" id="username" name="username" required><br><br>
            <label class="login_info" for="password"> SENHA:</label>
            <input class="login_caixa" type="password" id="password" name="password" required><br><br>
            <button>ENTRAR</button>
          </div>
       </form>
    </main>
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
</body>
</html>
