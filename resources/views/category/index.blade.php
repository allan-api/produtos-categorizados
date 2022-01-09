@extends('home')

@section('conteudo')

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Situação</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      @if (count($categories) >= 1)
        @foreach ($categories as $category)
        <tr>
          <th scope="row">{{$category["id"]}}</th>
          <td>{{$category["name"]}}</td>
          <td>{{$category["description"]}}</td>
          <td>
            <?php 
              if($category["status"] == 1){
                echo "Ativo";
                }else{
                  echo "Inativo";
                }
            ?>
          </td>
          <td><a href="category/{{$category['id']}}" class="btn btn-success">Editar</a></td>
          <td><a style="color: #FFF" href="category/delete/{{$category['id']}}" class="btn btn-danger">Excluir</a></td> 
        </tr>
       @endforeach
      @else
          <td colspan="6" style="text-align: center">Nenhum dado cadastrado</td>
      @endif
    </tbody>
  </table>
@endsection