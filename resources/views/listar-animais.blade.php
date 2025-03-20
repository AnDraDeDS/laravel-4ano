@extends('_partials/main')
@section('conteudo')
<nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <h1 class="text-center my-4">Animais para Adoção</h1>
      <div class="row">
        <!-- Cachorro 1 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://images.unsplash.com/photo-1554692918-08fa0fdc9db3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Rex">
            <h3 class="mt-3">Rex</h3>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Raça:</strong> Vira-lata</p>
            <p><strong>Descrição:</strong> Rex é um cachorro muito brincalhão e adora crianças.</p>
            <a href="#" class="btn btn-primary">Adotar</a>
          </div>
        </div>
        <!-- Gato 1 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Mimi">
            <h3 class="mt-3">Mimi</h3>
            <p><strong>Idade:</strong> 1 ano</p>
            <p><strong>Raça:</strong> Siamês</p>
            <p><strong>Descrição:</strong> Mimi é uma gatinha tranquila e carinhosa.</p>
            <a href="#" class="btn btn-primary">Adotar</a>
          </div>
        </div>
        <!-- Cachorro 2 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://images.unsplash.com/photo-1561037404-61cd46aa615b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Luna">
            <h3 class="mt-3">Luna</h3>
            <p><strong>Idade:</strong> 3 anos</p>
            <p><strong>Raça:</strong> Labrador</p>
            <p><strong>Descrição:</strong> Luna é uma cachorra muito dócil e adora passear.</p>
            <a href="#" class="btn btn-primary">Adotar</a>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Gato 2 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://images.unsplash.com/photo-1543852786-1cf6624b9987?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Thor">
            <h3 class="mt-3">Thor</h3>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Raça:</strong> Persa</p>
            <p><strong>Descrição:</strong> Thor é um gato muito independente e curioso.</p>
            <a href="#" class="btn btn-primary">Adotar</a>
          </div>
        </div>
        <!-- Cachorro 3 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://images.unsplash.com/photo-1583511655826-05700d52f4d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Bobby">
            <h3 class="mt-3">Bobby</h3>
            <p><strong>Idade:</strong> 4 anos</p>
            <p><strong>Raça:</strong> Bulldog</p>
            <p><strong>Descrição:</strong> Bobby é um cachorro muito calmo e adora dormir.</p>
            <a href="#" class="btn btn-primary">Adotar</a>
          </div>
        </div>
        <!-- Gato 3 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://images.unsplash.com/photo-1491485880348-85d48a9e5312?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Luna">
            <h3 class="mt-3">Luna</h3>
            <p><strong>Idade:</strong> 1 ano</p>
            <p><strong>Raça:</strong> SRD</p>
            <p><strong>Descrição:</strong> Luna é uma gatinha muito brincalhona e carinhosa.</p>
            <a href="#" class="btn btn-primary">Adotar</a>
          </div>
        </div>
      </div>
    </div>
@endsection