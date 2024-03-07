<?php

/**
 * @author yuju.web@gmail.com
 */

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
?>@auth
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
@endauth<div class="container">
    <div class="flexContainer">
        <div>logo</div>
        <div>
            @guest
            Guest navigation here
            @endguest
            @auth
            <div class="row ">
                <div class="col m-0">
                    <a type="button" class="red-brillante-boton p-2 text-center" href="/user/<?php echo $user_id; ?>/anuncios-oferta/create" tabindex="0"><span>Click here</span></a>
                </div>
                <div class="col m-0">
                    @if($user!=null && $user->role_id=='1')
                    @include('layouts.navigation-welcome')
                    @elseif($user!=null && $user->role_id=='2')
                    @include('layouts.navigation-welcome-admin')
                    @endif
                </div>
            </div>
            @else
            <!-- href="  route('login') " -->
            <a href="" class="bg-light rounded p-2 text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
            @if (Route::has('register'))
            <!-- href=" {{ route('register') }}" -->
            <a href="" cl as s="bg-light rounded p-2 ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Зарегистрироваться</a>
            @endif
            @endauth
        </div>
    </div>
</div>
