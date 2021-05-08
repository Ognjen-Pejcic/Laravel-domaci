<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="dashboard">Prikaz <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="unos">Unos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="greeting">Razno</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </h2>




        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Naziv</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Korisnik</th>
                    <th scope="col">Arhiviran</th>
                    <th scope="col">Tip slucaja</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($slucaj as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->naziv}}</td>
                    <td>{{ $s->opis}}</td>
                    <td>{{ $s->korisnik }}</td>
                    <td>{{ $s->arhiviran }}</td>
                    <td>{{ $s->tipSlucaja }}</td>
                    
                </tr>
                @endforeach

            </tbody>
        </table>


    </x-slot>
</x-app-layout>