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

         <p>Nome do Filme: {{ $filme->title }}</p>
         <p>Rating: {{ $filme->rating }}</p>
         <p>Duraçao: {{ $filme->length }}</p>
         
         
        </div>

</body>
</html>