<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Report</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <page size="A4" class="mt-5">
        <h1 class="text-center mb-5">Rapport de Recherche</h1>
        @if(count($selectedTitles) > 0)
            @foreach($selectedTitles as $title)
                <div class="section">
                    <div class="section-title"><h5>{{ Str::upper( $title) }} </h5></div>
                    <div class="section-content">
                        <div class="d-flex justify-content-end">
                            
                        </div>
                        </div>
                </div>
            @endforeach
        @else
            <p class="text-center">Aucun titre sélectionné.</p>
        @endif
       
    </page>
</body>
</html>