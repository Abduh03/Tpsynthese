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
    <div class="card-body">
        <h5 class="card-title">L'ancienne classe :</h5>
        <p class="card-text">
            L'id:{{$e->classe->idc}}<br/>
            Libelle: {{$e->classe->libelle}}<br/>
            Nombre maximum des étudiants: 24
        </p>
    </div>
    <div class="card-body">
        <h5 class="card-title">Choisir une nouvelle classe :</h5>
        <p class="card-text">
            <form method="POST" action="{{route('etudiants.update',$e)}}">
                          {{ csrf_field() }} 
                          @method('patch')
                choisir un <b>autre </b> id:
                <select id="l" class="form-control custom-select w-25" name="l">
                    @foreach($idclasses as $idcs)
                    <option value="{{$idcs->idc}}">{{$idcs->idc}}</option>
                    @endforeach
                </select>
            </p>
            <div id="resultats"></div>
                        <div class="mb-3">
                            <button class="btn btn-success btn-submit">Enregistre</button>
                        </div>

            
            </form>
        </p>
    </div>
    
</body>
</html>