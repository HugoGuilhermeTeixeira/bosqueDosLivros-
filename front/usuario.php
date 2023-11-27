<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- JS do Bootstrap (popper.js incluído) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/ea97a3051d.js" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="usuario.css">
  <link rel="stylesheet" type="text/css" href="carousel.css"> <!-- Adicionando o CSS para o carrossel -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
      <a class="header__link" href="#contatos">
        <i class="fa-solid fa-envelope"></i>CONTATOS</a>
    </div>
    <a class="header_link_sign" type="submit" href="#signup"> SIGN OUT </a>
  </header>

  <div class="user-page">
    <h2>SEUS LIVROS:</h2>
    <br>

    <!-- Mova a div do carrossel aqui -->
    <div id="livrosCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="livro1.png" class="d-block livro-img" alt="Livro 1">
        </div>
        <div class="carousel-item">
          <img src="livro2.png" class="d-block livro-img" alt="Livro 2">
        </div>
        <div class="carousel-item">
          <img src="livro3.png" class="d-block livro-img" alt="Livro 3">
        </div>
        <!-- Adicione mais itens conforme necessário -->
      </div>
      <a class="carousel-control-prev" href="#livrosCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#livrosCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

  </div>

  <div class="add-book-form">
    <h2>SEJA UM DOADOR!<br> Cadastre um Livro:</h2>
    <br>
    <form>
      <label for="bookTitle">Titulo:</label>
      <input type="text" id="bookTitle" placeholder="Digite o Titulo" required>

      <label for="author">Autor:</label>
      <input type="text" id="author" placeholder="Digite o Autor" required>

      <label for="author">Editora:</label>
      <input type="text" id="Editora" placeholder="Digite a Editora" required>

      <label for="author">Gênero:</label>
      <input type="text" id="Gênero" placeholder="Digite o Gênero" required>

      <label for="author">Sinopse:</label>
      <input type="text" id="Sinopse" placeholder="Digite a Sinopse" required><br>

      <button type="button">CADASTRAR</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Dados de exemplo (substitua pelos seus dados reais)
    var generos = ["Ficção", "Romance", "Mistério", "Fantasia"];
    var quantidades = [30, 20, 15, 35];

    var ctx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: generos,
        datasets: [{
          data: quantidades,
          backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            // Adicione mais cores conforme necessário
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            // Adicione mais cores conforme necessário
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          position: 'bottom',
        }
      }
    });
  </script>

</body>
<canvas id="pieChart" width="400" height="400"></canvas>
<footer>
  <span>
    <h1>Contate-nos</h1>
    <p>Entre contato conosco por estes meios</p>
  </span>
  <div id="contatos">
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
</html>
