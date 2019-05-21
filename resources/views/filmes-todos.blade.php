<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
</head>

    <body>

        <div class="container">

        <h1>Lista de filmes</h1>
        <a href="/filme/adicionar">+ Novo filme</a>

        <ul class="list-goup">
            
         @foreach($filmes as $filme)

             <li class="list-group-item">
                <a href="/filmes/{{ $filme->id }}">
                  {{ $filme->titleComRating() }}
                </a>

                <a class="btn-sm btn-dark ml-5" href='/filme/editar{{ $filme->id }}'>Editar</a>
             </li>

          @endforeach
          
         {{ $filmes->links() }}
         
         </ul>   
         
        </div>

</body>
</html>