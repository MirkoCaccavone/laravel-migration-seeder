<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>laravel migration seeder</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tabellone Partenze</h1>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Azienda</th>
                        <th>Codice Treno</th>
                        <th>Partenza</th>
                        <th>Arrivo</th>
                        <th>Orario</th>
                        <th>Orario Arrivo</th>
                        
                        <th>Carrozze</th>
                        <th>Stato</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($treni as $treno)
                        <x-train-component :treno="$treno"/>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Nessun treno in partenza da oggi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>