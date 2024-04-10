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

            <h1>Ajouter un etudiant </h1> 
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

            <form action="/ajouter/traitement" method="POST">
                @csrf
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom">
                </div><br>
                <div>
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom">
                </div><br>
                <div>
                    <label for="classe">Classe</label>
                    <input type="text" name="classe" id="classe">
                </div><br>

                <button type="submit">Ajouter un etudiant</button>

                <br><br>

                <button><a href="/etudiant">Revenir à la liste des etudiants</a></button>
            </form>
        
 
        </div>
    </div>
</div>
</body>
</html>