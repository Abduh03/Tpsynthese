<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <a href="/formations" style="float:right">Liste des formations</a>
    <ul>Les informations de la formation:
        <li><p>id de la formation: {{$formation->idf}},Titre :{{$formation}}
            le nombre d'heures :{{$formation->NbreHeure}}</p></li>
        <li>Le nombre total des classes de cette formation: {{count($classes)}}</li>
        <li>plus de détails sur les classes :
            <table class="table w-50 text-center">

            </table>
        </li>
    
    </ul>

    
</body>
</html>