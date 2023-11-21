<?php
include('excecoes.php');
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <header class="header">
        <h3 class="titulo">BOSQUE DOS LIVROS</h3>
        <a class="header__link" href="#about">HOME</a>
        <a class="header__link"  href="#experience">SOBRE NÓS</a>
        <a class="header__link" href="#projects">CONTATOS</a>
        <a class="header__link__sign" type="submit" href="#signup">SIGN UP</a>
    </header>
    <main class="apresentacao">
        <h1 class= "login">FAÇA SEU LOGIN</h1>
        <form method="post" action="Login.aspx">
            <div class="total">
            <label class="login_info" for="username"> CPF:</label>
            <input class= "login_caixa" type="text" id="username" name="username" required><br><br>
            <label class="login_info" for="password"> SENHA:</label>
            <input class="login_caixa" type="password" id="password" name="password" required><br><br>
            <input class= "botao__entrar" type="submit" value="ENTRAR">
          </div>
       </form>
    </main>
    <footer class="geral_footer">
        <div class="footer_div"> 
            <a class="link_footer" href="https://web.whatsapp.com/"> <img src="WHATS.png"> WHATSAPP</a>
             <a class="link_footer" href="https://instagram.com/"> <img src="insta.png"> INSTAGRAM</a>
              <a class="link_footer" href="https://gmail.com/"> <img src="gmail.png"> GMAIL</a>
               <a class="link_footer" href="https://facebook.com/"> <img src="face.png"> FACEBOOK</a>
        </div>
    </footer>
</body>
</html>