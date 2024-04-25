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

            <h1>Liste des historiques </h1>
            <hr><br>

            @if (session('status'))
                <div style="color: green;">
                    {{session('status')}}
                </div><br><br>
            @endif

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Classe</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $ide = 1;
                @endphp
                    @foreach ($etudiants as $etudiant)

                        <tr>
                            <td>{{$ide}}</td>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->prenom}}</td>
                            <td>{{$etudiant->classe}}</td>
                            <td>
                                <button>
                                    <a href="/restore/{{$etudiant->id}}">restorer</a>
                                </button>
                                <button>
                                    <a href="/formater/{{$etudiant->id}}">Supprimer</a>
                                </button>
                            </td>
                        </tr>
                         @php
                            $ide += 1;
                        @endphp

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
