<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cpf_valido = "123"; 
            $senha_valida = "senha123";  

            $cpf = $_POST["CPF"];
            $senha = $_POST["SENHA"];

            if ($cpf == $cpf_valido && $senha == $senha_valida) {
                echo "<p>Bem-vindo de volta, leitor!</p>";
            } else {
                echo "<p>Login ou senha inválidos. Tente novamente.</p>";
            }
        }
        ?>
