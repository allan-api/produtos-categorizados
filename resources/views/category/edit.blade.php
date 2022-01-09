
@extends('layout')

@section('head')
<style>
  .row {
    margin-top: 10px;
  }
</style>
@endsection

@section('cabecalho')
    Editar Categoria
@endsection

@section('conteudo')

<div class="conteudo">
  <form method="post" action="{{url("category/" . $category['id'])}}">
    @csrf
    <div class="row">
      <div class="col-md-1">
        <label for="name">Nome:</label>
      </div>
      <div class="col-md-5">
        <input class="form-control" name="name" id="name" type="text" value="{{$category["name"]}}" required>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        <label for="description">Descrição:</label>
      </div>
      <div class="col-md-5">
        <textarea class="form-control" name="description" id="description" rows="3" required>{{$category["description"]}}</textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        <label for="category">Situação:</label>
      </div>
      
      <div class="col-md-3">
        <select class="form-select form-select-lg mb-3 btn-sm" name="status" id="category" aria-label=".form-select-lg example" required>
          <option >Selecione uma situação</option>
          <option 
            @if ($category["status"])
              selected
            @endif
          value="1">Ativo</option>
          
          <option
          @if (!$category["status"])
              selected
            @endif
          value="0">Inativo</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        {{-- apenas dando espaçamento --}}
      </div>
      <div class="col-md-3">
        <input type="button" class="btn btn-secondary btn-sm" onclick="location.href = '/categories' "  value="Voltar">
        <input type="submit" class="btn btn-success btn-sm" value="Salvar">
      </div>
    </div>
  </form>
</div>
@endsection