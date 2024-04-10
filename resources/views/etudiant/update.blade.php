<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD avec laravel </title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">

            <h1>Modifier un etudiant </h1> 
            <hr><br>

            @if (session('status'))

            <div style="color: green;">
                {{session('status')}}
            </div><br><br>
                
            @endif
            @foreach ($errors->all() as $error)
                <p style="color: red;">
                    {{$error}}
                </p>
            @endforeach

            <form action="/update/traitement" method="POST"> 
                @csrf
                <input type="text" name="id" id="id" style="display: none;" value="{{$etudiants->id}}">
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" value="{{$etudiants->nom}}">
                </div><br>
                <div>
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" value="{{$etudiants->prenom}}">
                </div><br>
                <div>
                    <label for="classe">Classe</label>
                    <input type="text" name="classe" id="classe" value="{{$etudiants->classe}}">
                </div><br>

                <button type="submit">Modifier un etudiant</button>

                <br><br>

                <button><a href="/etudiant">Revenir à la liste des etudiants</a></button>
            </form>
        
 
        </div>
    </div>
</div>
</body>
</html>