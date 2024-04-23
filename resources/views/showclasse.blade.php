<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ShowClase</title>
</head>
<body>
    @if (count($idc) >0)
    <table>
        <tr>
            <th>idf</th>
            <th>libelle</th>
            <th>idformation</th>
            <th>nomberMax</th>
        </tr>
        <tr>
            <td>{{$idc}}</td>
            {{-- <td>{{$libelle}}</td>
            <td>{{$idformation}}</td>
            <td>{{$nomberMax}}</td> --}}
        </tr>
    </table>
    @else
        <p>list is empty</p>
    @endif
   
</body>
</html>