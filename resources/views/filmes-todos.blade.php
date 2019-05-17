
<ul>
    @foreach($filmes as $filme)
    
    
    <li>{{ $filme->titleComRating() }}

    @endforeach
</ul>   