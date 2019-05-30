@extends ('layouts.app')       
 
 @section('content')      
      

    <body>

        <div class="container">

         <p>Nome do Filme: {{ $filme->title }}</p>
         <p>Rating: {{ $filme->rating }}</p>
         <p>Duraçao: {{ $filme->length }}</p>

         @isset($filme->genero)
         <p>Gênero: {{ $filme->genero->name }}</p>
         <p>Ranking: {{ $filme->genero->ranking }}</p>
         @else
         <p>Genero: Nenhum genero cadastrado</p>
         @endisset
         
         <p>Atores: {{ $filme->atores}}
        </div>

  @endsection