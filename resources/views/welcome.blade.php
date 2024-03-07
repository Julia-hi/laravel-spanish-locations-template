<?php

/**
 * @author yuju.web@gmail.com
 */

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
?>

@auth
<?php
try {
    $user = Auth::user();
} catch (Exception $ex) {
    $user = null;
    $status = "error";
}

if ($user != null) {
    $user_name = $user->name;
    $user_id = $user->id;
}
?>
@endauth
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="author" content="yuju.web@gmail.com">
    <title>Spanish Locations</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/custom-style.css')}}">
    <!-- <link rel="stylesheet" href="<?php echo ('http://' . $_SERVER['HTTP_HOST'] . '/stylus.css'); ?>"> -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <header>
        <x-header-user />
    </header>


    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 py-4 sm:pt-0 ">

        <div class="container">
            <div class="justify-center sm:px-2 lg:px-4">

                <!-- Anuncios oferta -->
                <div id="search-block" class="mt-8 p-2 bg-yellow dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

                    <div class="row d-flex justify-content-center align-content-center m-3">
                        <form action="">
                            <div class="row p-3 g-3 justify-center">


                                <div class="col-xs-12 col-lg-2">
                                    <div class="row border input-border h-100 w-100 m-0 ">
                                        <div class="col-2 p-1 bg-white br-5">
                                            <svg style="height: 30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" fill="red" clip-rule="evenodd" d="M12 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm2-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path>
                                                <path fill-rule="evenodd" fill="red" clip-rule="evenodd" d="M21 10.986c0 4.628-4.972 8.753-7.525 10.567a2.528 2.528 0 0 1-2.95 0C7.972 19.739 3 15.613 3 10.986 3 5.576 7.03 2 12 2s9 3.576 9 8.986Zm-2 0c0 1.613-.886 3.348-2.328 5.043-1.411 1.659-3.144 3.034-4.355 3.893a.529.529 0 0 1-.634 0c-1.21-.86-2.944-2.234-4.354-3.893C5.886 14.334 5 12.599 5 10.986 5 6.748 8.065 4 12 4s7 2.748 7 6.986Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <select name="comunidad" id="comunidad" class="col-10 border-0 " aria-label=".form-select-lg example">
                                            <option value="todo" selected>Seleccione Región ...</option>
                                            <option value="andalucia">Andalucía</option>
                                            <option value="aragon">Aragón</option>
                                            <option value="asturias">Asturias</option>
                                            <option value="canarias">Canarias</option>
                                            <option value="cantabria">Cantabria</option>
                                            <option value="castilla-la mancha">Castilla La Mancha</option>
                                            <option value="castilla-leon">Castilla León</option>
                                            <option value="cataluña">Cataluña</option>
                                            <option value="ceuta">Ceuta</option>
                                            <option value="extremadura">Extremadura</option>
                                            <option value="galicia">Galicia</option>
                                            <option value="baleares">Islas Baleares</option>
                                            <option value="rioja">La Rioja</option>
                                            <option value="madrid">Madrid</option>
                                            <option value="melilla">Melilla</option>
                                            <option value="murcia">Murcia</option>
                                            <option value="navarra">Navarra</option>
                                            <option value="pais vasco">País Vasco</option>
                                            <option value="valencia">Valencia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-2">
                                    <div class="row border border-success h-100 w-100 m-0">
                                        <select name="provincia" id="provincia" class="border-0" aria-label=".form-select-lg example">
                                            <option value="todo">Seleccione provincia ...</option>
                                            <!-- opciones insertarán desde script of-lista.js -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-2">
                                    <div class="row h-100 w-100 m-0">
                                        <select name="poblacion" id="poblacion" class="border border-success rounded-right" aria-label=".form-select-lg example" style="height:40px;">
                                            <option value="todo">Seleccione población ...</option>
                                            <!-- opciones insertarán desde script of-lista.js -->
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="green-brillante-boton w-25">НАЙТИ</button>
                            </div>
                        </form>
                    </div>


                </div>


                <footer>
                    <x-footer />
                </footer>
            </div>
            <script src="{{asset('storage/js/jquery-3.6.0.min.js')}}"></script>
            <script src="{{asset('storage/js/of-lista.js')}}"></script>
</body>

</html>
