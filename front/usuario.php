<?php
include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://kit.fontawesome.com/ea97a3051d.js"
    crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" type="text/css" href="carousel.css"> <!-- Adicionando o CSS para o carrossel -->
    <title>usuario</title>
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
        <a class="header_link_sign" type="submit" href="#signup"> SIGN OUT </a>
      </header>

    <div class="user-page">
        <h2>SEUS LIVROS:</h2>
        <br>
        <div class="carousel">
            <img src="livro1.png" alt="Livro 1">
            <img src="livro2.png" alt="Livro 2">
            <img src="livro3.png" alt="Livro 3">
            <!-- Adicione mais imagens conforme necessário -->
        </div>
    </div>

    <div class="add-book-form">
        <h2>SEJA UM DOADOR!<br> Cadastre um Livro:</h2>
        <form>
            <label for="bookTitle">Titulo:</label>
            <input type="text" id="bookTitle" placeholder="Enter the Titulo" required>

            <label for="author">Autor:</label>
            <input type="text" id="author" placeholder="Enter the Autor" required>

            <label for="author">Editora:</label>
            <input type="text" id="Editora" placeholder="Enter the Editora" required>

            <label for="author">Gênero:</label>
            <input type="text" id="Gênero" placeholder="Enter the Gênero" required>

            <label for="author">Sinopse:</label>
            <input type="text" id="Sinopse" placeholder="Enter the Sinopse" required>

            <button type="button">CADASTRAR</button>
        </form>
    </div>

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
