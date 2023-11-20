<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapport </title>
    <!-- css -->
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
                    <button class="btn mt-2">Ajouter <i class="bi bi-plus-circle-fill text-light"></i></button>
                </div>
                </div>
              </div>
            @endforeach
            <div class="d-flex justify-content-center align-items-center mt-5">
                <a href="#" class="text-light fs-5 fw-bold btn rounded-3 btn-xs" style="background : rgb(246, 175, 2);font-family: 'Open Sans';">
                visualiser <i class="bi bi-eye-fill"></i></a>
            </div>
        @else
            <p class="text-center">Aucun titre sélectionné.</p>
        @endif
       
    </page>
   
</body>
</html>