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
    <form method="POST" action="">
        {{ csrf_field() }}

        <p>Choisir une formation :</p>
        <select id="l" class="form-control custom-select w-25" name="l">
            @foreach($idfs as $f)
                <option value="{{ $f->idf }}">{{ $f->idf }}</option>
            @endforeach
        </select>
    </form>
    <div id="resultats"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#l').change(function() {
                var formation = $(this).val();
                $.ajax({
                    url: '/rechercher',
                    type: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'f': formation
                    },
                    dataType: 'json',
                    success: function(response) {
                        var forma = response.formation;
                        var html = '<ul>Les informations de la formation : <li><p>ID de la formation : ' + forma.idf + '</p></li>';
                        html += '<li>Titre : ' + forma.Titre + ', le nombre d\'heures : ' + forma.NbreHeure + '</li>';
                        html += '<li>Le nombre total des classes de cette formation : ' + forma.classes.length + '</li>';
                        html += '<li>Plus de détails sur les classes :<table class="table w-50 text-center"><tr><th>ID</th><th>Libellé</th><th>Nombre Max</th><th>Nombre d\'étudiants</th></tr>';
                        for (var i = 0; i < forma.classes.length; i++) {
                            html += '<tr><td>' + forma.classes[i].idc + '</td><td>' + forma.classes[i].libelle + '</td><td>' + forma.classes[i].NombreMax + '</td><td>' + forma.classes[i].etudiants.length + '</td></tr>';
                        }
                        html += '</table></li></ul>';

                        $('#resultats').html(html);
                    },
                    error: function(xhr, status, error) {
                        alert('Une erreur s\'est produite : ' + error);
                    }
                });
            });
        });
    </script>
</body>
</html>--}}

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
    <form method="POST" action="/rechercher">
        {{ csrf_field() }}

        <p>Choisir une formation :</p>
        <select id="l" class="form-control custom-select w-25" name="l">
            @foreach($idfs as $f)
                <option value="{{ $f->idf }}">{{ $f->idf }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary mt-3">Rechercher</button>
    </form>
    <div id="resultats">
        @if(isset($resultats))
            <ul>
                <li>Les informations de la formation :</li>
                <li>ID de la formation : {{ $resultats->idf }}</li>
                <li>Titre : {{ $resultats->Titre }}, le nombre d'heures : {{ $resultats->NbreHeure }}</li>
                <li>Le nombre total des classes de cette formation : {{ count($resultats->classes) }}</li>
                <li>Plus de détails sur les classes :
                    <table class="table w-50 text-center">
                        <tr>
                            <th>ID</th>
                            <th>Libellé</th>
                            <th>Nombre Max</th>
                            <th>Nombre d'étudiants</th>
                        </tr>
                        @foreach($resultats->classes as $classe)
                            <tr>
                                <td>{{ $classe->idc }}</td>
                                <td>{{ $classe->libelle }}</td>
                                <td>{{ $classe->NombreMax }}</td>
                                <td>{{ count($classe->etudiants) }}</td>
                            </tr>
                        @endforeach
                    </table>
                </li>
            </ul>
        @endif
    </div>
</body>
</html>
