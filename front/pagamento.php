<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <script
      src="https://kit.fontawesome.com/ea97a3051d.js"
      crossorigin="anonymous"
    ></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylePagamentos.css" />
    <title>Página de Pagamento</title>
  </head>
  <body>
    <header class="header">
      <span class="logo">
        <i class="fa-solid fa-book-bookmark"></i>
        <h3 class="titulo">BOSQUE DOS<br />LIVROS</h3>
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

    <div class="container">
      <div class="card">
        <div class="card-header">
          <h1>Forma de pagamento</h1>
          <p>Preencha os campos e efetue o pagamento</p>
        </div>

        <div class="card-body">
          <div class="payment-method">
            <h2>Cartão de Crédito</h2>
            <p>Até 5 minutos para o pagamento ser processado</p>
            <form>
              <input
                type="text"
                id="cardNumber"
                placeholder="Nº do Cartão"
                required
              />

              <input
                type="text"
                id="expirationDate"
                placeholder="23/28"
                required
              />

              <input type="text" id="cvv" placeholder="CVV" required />

              <button
                type="button"
                onclick="processPayment('Cartão de Crédito')"
              >
                Pagar
              </button>
            </form>
          </div>

          <div class="payment-method">
            <h2 style="color: #333">PIX <span>RECOMENDADO</span></h2>
            <p>Até 2 minutos para o pagamento ser processado</p>
            <form>
              <input type="text" id="pixKey" placeholder="Chave" required />

              <button type="button" onclick="processPayment('Pix')">
                Pagar
              </button>
            </form>
          </div>

          <div class="payment-method">
            <h2 style="color: #333">Boleto Bancário</h2>
            <p>Até 48 horas para o pagamento ser processado</p>
            <form>
              <input type="text" id="boletoName" placeholder="Nome" required />
              <input
                type="text"
                id="valorBoleto"
                placeholder="Valor"
                required
              />
              <button type="button" onclick="processPayment('Boleto Bancário')">
                Gerar Boleto
              </button>
            </form>
          </div>
        </div>

        <!--  <div class="card-footer"></div> -->
      </div>
    </div>

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