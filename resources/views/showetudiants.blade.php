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
    <a href="etudiants/create" style="float: right">Ajouter un etudiant</a>
    @if(count($etudiants)>0)
    <table class="table table-striped">
        <tr>
        <th>code</th>
        <th>nom</th>
        <th>prénom</th>
        <th>adresse</th>
        <th>Date de naissance</th>
        <th>Id classe</th>
    </tr>
    @foreach($etudiants as $e)
    <tr>
        <td>{{$e->codeE}}</td>
        <td>{{$e->nom}}</td>
        <td>{{$e->prenom}}</td>
        <td>{{$e->adresse}}</td>
        <td>{{$e->dateNaissance}}</td>
        <td><a href="{{route('class.show',["idc"=>$e->idclasse])}}">{{$e->idclasse}}</a></td>
        <td><a href="/etudiants/{{$e->codeE}}">Détails..</a><a href="/etudiants/{{$e->codeE}}/edit">Modifier</a></td>
    </tr>
        @endforeach
    </table>
    @else
    <p>Pas d'etudiants dans la BD</p>
    @endif
</body>
</html>