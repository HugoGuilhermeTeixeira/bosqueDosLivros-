<!DOCTYPE html>
<html>
<head>
    <title>Página de Pagamento</title>
    
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            Largura : 400px;
            Margem: 0 auto;
            Preenchimento: 20px;
            Fronteira: 1px solid #ddd;
            Raio da fronteira: 5px;
        }

        input[type="text"], input[type="email"], input[type="telefone"], select {
            Largura: 100%;
            Preenchimento: 10px;
            Fronteira: 1px solid #ddd;
            Raio da fronteira: 5px;
            Margem inferior: 15px;
        }

        botão[type="Enviar"] {
            Cor de fundo: #4CAF50;
            Cor: white;
            Preenchimento: 10px 20px;
            Fronteira: Nenhum;
            Raio da fronteira: 5px;
            Cursor: Ponteiro;
            width: 100%;
        }

        Botão[type="enviar"]:flutuar {
             Cor de fundo: #45a049;
        }
    </style>
    <div class="container">
        <h2>Detalhes do Pagamento</h2>
        <Ação de formulário="/Enviar-pagamento" método="marcar">
            <input type="text" name="Nome do Titular do cartão" 
            <input type="tel" name="Número do cartão" placeholder="Número do Cartão" required>
            <input type="text" name="expiry-date" placeholder="Data de Validade MM/AA" required>
            <input type="tel" name="cvv" placeholder="CVV" required>
            <input type="email" name="payer-email" placeholder="Seu Email" required>
            <input type="tel" name="payer-phone" placeholder="Seu Número de Telefone" required>
            <button type="submit">Pagar Agora</button>
        </form>
    </div>
</body>
</html>
