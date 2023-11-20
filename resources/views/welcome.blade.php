<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

  

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

  

    <title>Module de génération des rapports d\'activités</title>

  

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>

<body>

    <div id="app">

        <main class="container">

            <div class="card mt-5">

              <div class="card-header text-center h3 fw-bold">

                Module de génération de rapports d'activités académique et scientifique

              </div>

              <div class="card-body text-center">

                <form class="needs-validation" method="post" action="{{ route('traitement.form') }}">
                    @csrf
                    <div class="row">
                      <div class="col">
                        <select id="inputYear" class="form-control-lg form-select" required>
                            <option selected value="">Année</option>
                            @foreach ($years as $year)
                                <option value={{ $year }}>{{ $year }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col">
                        <select id="inputPeriod" class="form-control-lg form-select" required>
                            <option selected value="">Périodicité</option>
                            <option>Trimestriel</option>
                            <option>Semestriel</option>
                            <option>Annuel</option>
                          </select>
                      </div>
                      <div class="col">
                        <select id="inputNumber" class="form-control-lg form-select" required>
                            <option selected value="">Période</option>
                          </select>
                      </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <input type="checkbox" class="custom-control-input" name="titles[]" value="Enseignement">
                            <label class="custom-control-label h5" for="customCheck1">Enseignement </label>
                        </div>
                        <div class="col">
                          <input type="checkbox" class="custom-control-input" name="titles[]" value="Encadrement">
                          <label class="custom-control-label h5" for="customCheck2">Encadrement</label>  
                        </div>
                        <div class="col">                       
                            <input type="checkbox" class="custom-control-input" name="titles[]" value="Commité de Lecture">
                            <label class="custom-control-label h5" for="customCheck3">Comité de Lecture </label>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                          <input type="checkbox" class="custom-control-input" name="titles[]" value="Publication">
                          <label class="custom-control-label h5" for="customCheck4">Publication </label>                            
                        </div>
                        <div class="col ">
                            <input type="checkbox" class="custom-control-input" name="titles[]" value="Poste occupé">
                            <label class="custom-control-label h5" for="customCheck5">Poste occupé</label>                         
                        </div>
                        <div class="col">
                            <input type="checkbox" class="custom-control-input" name="titles[]" value="Projet de Recherche">
                            <label class="custom-control-label h5" for="customCheck6">Projet de Recherche</label>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col mr-auto"></div>
                        <button class="btn btn-primary col-2 fw-bold btn-lg" type="submit">Générer <i class="bi bi-file-earmark-text-fill"></i></button>
                      </div>
                  </form>

              </div>

            </div>
{{-- 
            <table class="table mt-5">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Année</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                 <tr>
                        <th scope="row">1</th>
                        <td>Empty</td>
                        <td>Empty</td>
                        <td>Empty</td>
                        <td><a href=""><i class="bi bi-trash text-danger rounded-1 h4"></i></a> <a href=""><i class="bi bi-pencil-fill text-dark rounded-1 h4 mx-3"></i></a></td>                   
                 </tr>
                </tbody>
              </table> --}}

        </main>

    </div>

</body>

</html>