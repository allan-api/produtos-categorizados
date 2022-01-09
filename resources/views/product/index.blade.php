@extends('home')

@section('conteudo')

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Categoria</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      @if (count($products) >= 1)
        @foreach ($products as $product)
          <tr>
            <th scope="row">{{$product["id"]}}</th>
            <td>{{$product["product"]}}</td>
            <td>{{$product["description"]}}</td>
            <td>{{$product["category"]}}</td>
            <td><a href="product/{{$product['id']}}" class="btn btn-success">Editar</a></td>
          <td><a style="color: #FFF" href="product/delete/{{$product['id']}}" class="btn btn-danger">Excluir</a></td> 
          </tr>
        @endforeach
      @else
          <td colspan="6" style="text-align: center">Nenhum dado cadastrado</td>
      @endif
    </tbody>
  </table>
@endsection