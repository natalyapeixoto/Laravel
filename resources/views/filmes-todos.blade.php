@extends ('layouts.app')       
 
 @section('content')      
      
      
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
                <a class="btn-sm btn-danger ml-5" href='/filme/excluir{{ $filme->id }}'>Excluir</a>
             </li>

          @endforeach
          
         {{ $filmes->links() }}
         
         </ul>   
         
        </div>

        @endsection