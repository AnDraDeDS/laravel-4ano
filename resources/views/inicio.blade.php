@extends('_partials/main')
@section('conteudo')


    <div class="jumbotron text-center">
      <h1 class="display-4">Adote um Amigo</h1>
      <p class="lead">Dê um lar para um animal de rua e ganhe um companheiro para a vida toda.</p>
      <hr class="my-4">
      <p>Navegue pela nossa lista de animais disponíveis para adoção e encontre o seu novo melhor amigo.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Ver Animais</a>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Por que Adotar?</h2>
          <p>Adotar um animal de rua não só salva uma vida, mas também abre espaço para que outros animais sejam resgatados.</p>
        </div>
        <div class="col-md-4">
          <h2>Como Adotar?</h2>
          <p>O processo de adoção é simples e seguro. Basta escolher o animal, preencher o formulário e aguardar o contato.</p>
        </div>
        <div class="col-md-4">
          <h2>Ajude-nos</h2>
          <p>Se você não pode adotar, ainda pode ajudar fazendo uma doação ou divulgando nosso trabalho.</p>
        </div>
      </div>
    </div>

    <footer class="footer text-center fixed-bottom">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>
@endsection