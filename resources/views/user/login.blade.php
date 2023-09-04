
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
        <input type="submit" value="Iniciar sesión">
    </form>