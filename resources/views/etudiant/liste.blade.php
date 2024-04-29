<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>CRUD avec laravel </title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">

            <h1>CRUD avec laravel </h1>

            <hr>
            <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a><br>
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
                        <th>Salutation</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $ide = 1;
                @endphp
                    @foreach ($etudiants as $etudiant)

                        <tr>
                            <td class="m-2">{{$ide}}</td>
                            <td class="m-2">{{$etudiant->nom}}</td>
                            <td class="m-2">{{$etudiant->prenom}}</td>
                            <td class="m-2">{{$etudiant->classe}}</td>
                            <td class="m-2">
                                <button>
                                    <a href="/update-etudiant/{{$etudiant->id}} " class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</a>
                                </button>
                                <button>
                                    <a href="delete-etudiant/{{$etudiant->id}} " class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Delete</a>
                                </button>
                            </td>
                            <td class="m-2">
                                <x-NewFirstComponent :name="$etudiant->nom" :classe="$etudiant->classe" class="text-green-500">
                                    {{-- <div>
                                        <p>Salut les amies...!!! </p>
                                    </div> --}}
                                    <x-slot name='substile'>
                                        titre d'exemple..!!!
                                    </x-slot>
                                </x-NewFirstComponent>
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
