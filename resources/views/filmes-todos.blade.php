
<ul>
    @foreach($filmes as $filme)
    
    
    <li>{{ $filme->titleComRating() }}

    @endforeach

    {{ $filmes->links() }}
</ul>   