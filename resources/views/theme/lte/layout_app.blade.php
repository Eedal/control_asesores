<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - Tigo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>      
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link type="text/css"  rel="stylesheet" href="{{ asset('css/materialize.css') }}" media="screen,projection"/>
    
</head>
<body class="@yield('style_body')">
    
    {{-- nav  --}}

    <nav class="" role="navigation" style="background: #00377B">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logra</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="">Perfil</a></li>
            <li><a href="">Salir</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="">Perfil</a></li>
            <li><a href="">Salir</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
    {{-- fin nav --}}

    <!--Agrega contenido  -->
    @yield('content')


   

    <!-- script -->
    <script src="{{ asset('js/jquery-3.4.0.min.js' ) }}"></script>
    <script src="{{ asset('js/materialize.min.js'  ) }}"></script>
    <script src="{{ asset('js/sweetalert.min.js'   ) }}"></script>

    <script>
        $(document).ready(function(){
            $('.fixed-action-btn').floatingActionButton();
            M.updateTextFields();
            $('select').formSelect();
            $('.sidenav').sidenav();
            // $('.datepicker').datepicker();
            $('.datepicker').datepicker({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year
                format: 'yyyy-mm-dd' 
            });
            $('.timepicker').timepicker({
                default: 'now',
                twelveHour: false, // change to 12 hour AM/PM clock from 24 hour
                donetext: 'OK',
                // format: "H:MM:SS",
                autoclose: false,
                vibrate: true
            });
            $('.tooltipped').tooltip();
        });
    </script>

    @yield('extra_scripts')

</body>
</html>
