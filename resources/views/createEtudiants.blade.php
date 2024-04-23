<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <title>Update</title>
</head>
<body>
    
   <h1 class="text-3xl ont-bold text-center mb-4">Create Etudiant</h1>
    <form action="{{route('etudiant.store')}}" method='post'>
        @csrf
       @method('post')
        <label for="nom" class=" text-gray-700 font-medium ">Name:</label>
        <input type="text"  name="nom" required  ><br><br>
      
        <label for="prenom" class=" text-gray-700 font-medium ">prenom:</label>
        <input type="text"  name="prenom"  required  ><br><br>
      
        <label for="adresse" class=" text-gray-700 font-medium">adresse:</label><br>
        <textarea type="text" name="adresse" ></textarea><br><br>

        <label for="Id_classe" class=" text-gray-700 font-medium">Id classe</label>
        <select name="Id_classe" id="Id_classe">
            @foreach ($idC as $item)
                <option value="{{$item->idc}}">{{$item->idc}}</option>
            @endforeach
        </select><br><br>

        <label for="Date de naissance" class=" text-gray-700 font-medium">Date de naissance:</label>
        <input type="date" name="dateNnaissance" ><br><br>

        <input type="submit" value="Create" class="px-4 py-2 bg-indigo-500 text-white font-bold rounded-md hover:bg-indigo-700">
      </form>   

</body>
</html>