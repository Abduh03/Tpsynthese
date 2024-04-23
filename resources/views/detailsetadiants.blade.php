<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="container">
    <div class="row">
        <div class="card rounded-3 col-md-5 m-1" style="background-color:#a7d7">
        <div class="card-body">
            <h5 class="card-title">Les informations de l'etudiant:</h5>
            <p class="card-text">
                Code : {{$etudiant->codeE}}, Nom et prénom :{{$etudiant->nom}}
                {{$etudiant->prenom}}<br/>
                Sa date de naissance : {{$etudiant->dateNaissance}} , son adresse :
            </p>

        </div>
        </div> <div class="card rounded-3 col-md-5 m-1" style="background-color:rgba(226, 149, 203, 0.467)">

        <div class="card-body">
            <h5 class="card-title">Sa classe</h5>
            <p class="card-text">
                L'id: {{$classe->libelle}}<br/>
                Nombre maximum des étudiants: {{$classe->NombreMax}}
            </p>
    </div>
    </div>
</div>
    <div class="row">
    <div class="card rounded-3 col-md-5 m-1" style="background-color:#9753a8;">
    <div class="card-body">
    <h5 class="card-title">Les information en cours:</h5>
        <p class="card-text">
        <ul>
            <li>L'id de la formation : {{$classe->idformation}}</li>
            <li>Le nombre d'heure de la formation : {{$formation->Titre}}</li>
            <li>Le nombre d'heure de la formation : {{$formation->NbreHeure}}</li>
        </ul>
    </p>
    </div>
</div>
    <div class="card rounded-3 col-md-5 m-1" style="background-color:#f7a308;">
    <div class="card-body">
    <h5 class="card-title">Les avis</h5>
    </div>
        <div class="card-text">
            @foreach($AVIS as $a)
            <li class="list-group-item list">id Formation :{{$a->idf}} les points : {{$a->pivot->points}}</li>
            @endforeach
        </div>
    </div>
</div>
<div class="row">
    <div class=""col-md-10 text-center>
<a href="/etudiants" class="btn btn-primary">Liste des etudiants</a>
</div>
</div>
</body>
</html>