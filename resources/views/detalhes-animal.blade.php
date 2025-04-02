@extends('_partials/main')
@section('conteudo')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="animal-details">
            <!-- Foto realista de um cachorro vira-lata -->
            <img src="https://images.unsplash.com/photo-1554692918-08fa0fdc9db3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Rex">
            <h2 class="mt-4">Rex</h2>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Raça:</strong> Vira-lata</p>
            <p><strong>Sexo:</strong> Macho</p>
            <p><strong>Porte:</strong> Médio</p>
            <p><strong>Localização:</strong> São Paulo, SP</p>
            <p><strong>Descrição:</strong> Rex é um cachorro muito brincalhão e adora crianças. Ele é muito sociável e se dá bem com outros animais. Rex está procurando um lar onde possa receber muito carinho e atenção. Ele é vacinado, castrado e está pronto para fazer parte de uma família amorosa.</p>
            <div class="mt-4">
              <a href="#" class="btn btn-primary">Adotar</a>
              <a href="animais.html" class="btn btn-secondary">Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection