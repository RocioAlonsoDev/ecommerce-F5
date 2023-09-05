    <div style='display:flex;gap:20px;'>
        <a href='/'>Carta</a>
        <a href='/dish/1'>Patatas Bravas</a>
        <a href='/about-us'>Sobre nosotros</a>
        @if (auth()->user())
        <a href='/user/{{auth()->user()->user_id}}'>Mi perfil</a>
        <a href='/user/logout'>Cerrar sesión</a>
        @else
        <a href='/user/login'>Iniciar Sesión</a>
        <a href='/user/signup'>Registrarse </a>
        @endif
    </div>

<h1>Iniciar sesión</h1>

<form method="POST" action="{{url('/')}}">
        {{csrf_field()}}
        <label for="email">Correo electrónico</label>
        <br>
        <input type="text" name="email">
        <br>
        @if ($errors->has('email'))
            <span>{{ $errors->first('email') }}</span>
        @endif
        <label for="password">Contraseña</label>
        <br>
        <input type="password" name="password">
        <br>
        @if ($errors->has('password'))
            <span>{{ $errors->first('password') }}</span>
        @endif
        <input type="checkbox" name="rememberme">
        <label for="rememberme">Recuérdame. </label>
        <br>
        <a href="/user/signup">¿Aún no tienes cuenta? Regístrate aquí</a>
        <br>
        <input type="submit" value="Iniciar sesión">
    </form>