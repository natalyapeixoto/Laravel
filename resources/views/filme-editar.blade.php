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

            @if (count ($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                    </ul>
                 </div>
            @endif
          
            <form action="/filme/editar{{ $filme->id }}" method="POST">
                @csrf
                <label>Nome do filme</label>     
                <input type="text" name="title" value="{{ $filme->title }}">
                <input type="number" name="rating" value="{{ $filme->rating }}">
                <button type="submit">Finalizar edição</button> 
             </form>
         
        </div>

</body>
</html>