<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <a href="formation/search" style="float:right">Rechercher une formation</a>
    @if(count($formations)>0)
    <table class="table table-striped w-50">
        <tr>
            <th>id formation</th>
            <th>Titre</th>
            <th>Nombre d'heures</th>
        </tr>
            @foreach ($formations as $formation)
            <tr>
            <td>{{$formation->idf}}</td>
            <td>{{$formation->Titre}}</td>
            <td>{{$formation->NbreHeure}}</td>
        </tr>
            @endforeach
    </table>
    @endif
</body>
</html>