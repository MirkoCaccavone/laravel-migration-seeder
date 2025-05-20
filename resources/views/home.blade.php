<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Meta tags per la configurazione della pagina --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Inclusione di Font Awesome per le icone --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    {{-- Inclusione degli asset compilati con Vite (CSS e JS) --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>laravel migration seeder</title>
</head>

<body>
    {{-- Container principale con margine superiore --}}
    <div class="container mt-5">
        {{-- Titolo principale centrato --}}
        <h1 class="text-center mb-4">Tabellone Partenze</h1>

        {{-- Componente per la visualizzazione di data e ora --}}
        <x-date-time />

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        {{-- Colonne della tabella --}}
                        <th>Azienda</th>
                        <th>Codice Treno</th>
                        <th>Data</th>
                        <th>Partenza</th>
                        <th>Arrivo</th>
                        <th>Orario</th>
                        <th>Orario Arrivo</th>
                        <th>Carrozze</th>
                        <th>Stato</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Ciclo forelse per iterare sui treni con gestione caso vuoto --}}
                    @forelse ($treni as $treno)
                        {{-- Componente che renderizza ogni riga del treno --}}
                        <x-train-component :treno="$treno"/>
                    @empty
                        {{-- Messaggio mostrato quando non ci sono treni --}}
                        <tr>
                            <td colspan="9" class="text-center">Nessun treno in partenza da oggi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>