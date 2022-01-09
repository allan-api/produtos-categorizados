<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio Spot</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('head')
</head>
  <body>
    <div class="container">
      <div class="jumbotron">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">S P O T</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                @if(strpos($_SERVER["REQUEST_URI"], 'products') !== false)
                  <strong><a class="nav-link active" aria-current="page" href="{{url('/products')}}" style="font-size: 18px">Produto</a></strong>
                @else
                  <a class="nav-link active" aria-current="page" href="{{url('/products')}}" style="font-size: 14px">Produto</a>
                @endif
              </li>
              <li class="nav-item">
                @if(strpos($_SERVER["REQUEST_URI"], 'categories') !== false)
                  <strong><a class="nav-link active" href="{{url('/categories')}}" style="font-size: 18px">Categoria</a></strong>
                @else
                  <a class="nav-link" href="{{url('/categories')}}" style="font-size: 14px">Categoria</a>
                @endif
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="row">
      <div class="col-md-3">
        <a class="btn btn-secondary btn-sm" href="./product">+ Crie um Produto</a>
      </div>
      <div class="col-md-3">
        <a class="btn btn-secondary  btn-sm" style="background: #6b6b6b" href="./category">+ Crie uma Categoria</a>
      </div>
    </div>
    <br>
    @yield('conteudo')

  </div>
  </body>
</html>