<!doctype html>

<html lang= "{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8", lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOSPITAL_MANAGE</title>
    <link href="{{  config('app.url') }}assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="{{  config('app.url') }}assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="{{  config('app.url') }}assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="{{  config('app.url') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{  config('app.url') }}assets/css/master.css" rel="stylesheet">
    {{-- <link href="{{  config('app.url') }}assets/vendor/chartsjs/Chart.min.css" rel="stylesheet"> --}}
    <link href="{{  config('app.url') }}assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <meta charset="utf-8", lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
</head>

<body class="clinic_version">

    <div class="wrapper">
        <nav id="sidebar" class="active mt-4">
            <ul class="mt-5 list-unstyled components text-secondary">
                {{-- @auth --}}
                <li>
                    {{-- <a href="{{ route('admins') }}"><i class="fas fa-home"></i> Dashboard</a> --}}
                </li>
                <li>
                    <a href="{{ route('admin_docters') }}"><i class="fas fa-file-alt"></i>Docteurs</a>
                </li>
                <li>
                    <a href="{{ route('admin_operations_report') }}"><i class="fas fa-file-alt"></i>Rapport des opérations</a>
                </li>
                <li>
                    <a href="{{ route('admin_birth_report') }}"><i class="fas fa-file-alt"></i>Rapport de naissance</a>
                </li>
                <li>
                    <a href="{{ route('admin_patients') }}"><i class="fas fa-file-alt"></i>Patients</a>
                </li>
                <li>
                    <a href="{{ route('nurses') }}"><i class="fas fa-file-alt"></i>Infirmiers/infirmières</a>
                </li>
                <li>
                    <a href="{{ route('employees') }}"><i class="fas fa-file-alt"></i>Employés</a>
                </li>
                <li>
                    <a href="{{ route('departments') }}"><i class="fas fa-file-alt"></i>Departement</a>
                </li>
                <li>
                    <a href="{{ route('Rooms') }}"><i class="fas fa-file-alt"></i>Pièces</a>
                </li>
                <li>
                    <a href="{{ route('patients_beds') }}"><i class="fas fa-file-alt"></i>Des lits</a>
                </li>
                <li>
                    <a href="{{ route('patient_bills') }}"><i class="fas fa-file-alt"></i>Factures </a>
                </li>

                <li>
                    <a href="{{ route('medicinesStore') }}"><i class="fas fa-file-alt"></i>Pharmacie</a>
                </li>
                <li>
                    <a href="{{ route('hods') }}"><i class="fas fa-file-alt"></i>HOD's</a>
                </li>
                <li>
                    <a href="{{ route('blocks') }}"><i class="fas fa-file-alt"></i>Blocs</a>
                </li>
                <li>
                    <a href="{{ route('requestedAppointment') }}"><i class="fas fa-file-alt"></i>Demande de rendez-vous</a>
                </li>
                <li>
                    <a href="{{ route('subscibers') }}"><i class="fas fa-file-alt"></i>Les abonnés</a>
                </li>
                <li>
                    <a href="{{ route('contactedus') }}"><i class="fas fa-file-alt"></i>Messages</a>
                </li>
                <!-- <li>
                    <a href="#authmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> </a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="login.html"><i class="fas fa-lock"></i> </a>
                        </li>

                        <li>
                            <a href="forgot-password.html"><i class="fas fa-user-lock"></i> </a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin_settings') }}"><i class="fas fa-cog"></i>Réglages</a>
                </li>
                {{-- @endauth --}}
                {{-- @guest --}}
                <li>
                    <a href="signup.html"><i class="fas fa-user-plus"></i> </a>
                </li>
                {{-- @endguest --}}

            </ul>
        </nav>
        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg fixed-top navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light"><i
                        class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary"
                                    data-toggle="dropdown"><i class="fas fa-link"></i> <span>Accès Rapide</span> <i
                                        style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Journaux d'Accès</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back
                                                ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i>
                                                Mises à jour</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i>
                                                Rôles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary"
                                    data-toggle="dropdown"><i class="fas fa-user"></i>
                                    <span>{{ auth()->user()->name ?? '' }}</span> <i style="font-size: .8em;"
                                        class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i>
                                                Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i>
                                                Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Règlages</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{ route('login') }}" class="dropdown-item"><i
                                                    class="fas fa-sign-out-alt"></i> Se déconnecter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content">
                <div class="container">
                    <br><br><br>

                    {{ $slot }}

                    @yield('admin_content')
                    @livewireScripts

                    <script src="{{  config('app.url') }}js/livewire-turbolinks.js"></script>
                    <script src="{{  config('app.url') }}js/alpine.js"></script>
                    <script src="{{  config('app.url') }}assets/vendor/jquery/jquery.min.js"></script>
                    <script src="{{  config('app.url') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    {{-- <script src="{{  config('app.url') }}assets/vendor/chartsjs/Chart.min.js"></script> --}}
                    {{-- <script src="{{  config('app.url') }}assets/js/dashboard-charts.js"></script> --}}
                    <script src="{{  config('app.url') }}assets/js/script.js"></script>
</body>

</html>
