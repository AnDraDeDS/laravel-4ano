@extends('_partials/main')
@section('conteudo')

<div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="register-container">
            <h2 class="text-center">Adicionar Animal</h2>
            <form action="{{ route('cadastro-animal')}}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name='nome' id="name" placeholder="Digite o nome do animal" required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Cor</label>
                <input type="text" class="form-control" name='cor' id="name" placeholder="Informe a cor do seu animal" required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Peso</label>
                <input type="text" class="form-control" name='peso' id="peso" placeholder="Digite o peso do seu animal" required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Idade</label>
                <input type="text" class="form-control" name='idade' id="idade" placeholder="Qual idade do seu animal" required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Espécie</label>
                <input type="text" class="form-control" name='especie' id="especie" placeholder="Qual espécie do seu animal" required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Raça</label>
                <input type="text" class="form-control" name='raca' id="raca" placeholder="Digite seu nome completo" required>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection