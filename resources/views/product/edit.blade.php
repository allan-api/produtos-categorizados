
@extends('layout')

@section('head')
<style>
  .row {
    margin-top: 10px;
  }
</style>
@endsection

@section('cabecalho')
    Editar Produto
@endsection

@section('conteudo')

<div class="conteudo">
    <form method="post" action="{{url("product/" . $product['id'])}}">
      @csrf
      <div class="row">
        <div class="col-md-1">
          <label for="name">Nome:</label>
        </div>
        <div class="col-md-5">
          <input class="form-control" name="name" id="name" value="{{$product["name"]}}" type="text" required>
        </div>
      </div>

      <div class="row">

        <div class="col-md-1">
          <label for="category">Categoria:</label>
        </div>

        <div class="col-md-3">
          <select class="form-select form-select-lg mb-3 btn-sm" name="category" id="category" required>
            <option value="">Selecione uma categoria</option>
            @foreach($categories as $item)
              <option value="{{$item["id"]}}"
              @if ($product["category_id"] == $item["id"])
                  selected
              @endif
              >{{$item["name"]}}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-3">
          <a class="btn btn-primary btn-sm" href="./category">+ Crie um categoria</a>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-1">
          <label for="description">Descrição:</label>
        </div>
        <div class="col-md-5">
          <textarea class="form-control" category="description" name="description" id="description" rows="3" required>{{$product["description"]}}</textarea>
        </div>
      </div>


      <div class="row">
        <div class="col-md-1">
          {{-- apenas dando espaçamento --}}
        </div>
        <div class="col-md-3">
          <input type="button" class="btn btn-secondary btn-sm" onclick="location.href = '/products' "  value="Voltar">
          <input type="submit" class="btn btn-success btn-sm" value="Salvar">
        <div class="col-md-3">
      </div>
      </form>
</div>
@endsection