<h1>Regístrate y realiza tu pedido</h1>
<a href="/user/login">¿Ya tienes cuenta? Inicia sesión</a>

<form method="POST" action="{{url('/success')}}">
        {{csrf_field()}}
        <label for="email">Correo electrónico</label>
        <br>
        <input type="text" name="email" required>
        <br>
        <label for="password">Contraseña</label>
        <br>
        <input type="password" name="password" required>
        <br>
        <label for="name">Nombre</label>
        <br>
        <input type="text" name="name" required>
        <br>
        <label for="surname">Apellidos</label>
        <br>
        <input type="text" name="surname" required>
        <br>
        <label for="phone">Teléfono móvil</label>
        <br>
        <input type="tel" name="phone" required>
        <br>
        <label for="address">Dirección</label>
        <br>
        <input type="text" name="address" required>
        <br>
        <input type="checkbox" name="newsletter">
        <label for="newsletter">Suscríbete a nuestra newsletter para estar al tanto de nuestras últimas ofertas. </label>
        <br>
        <input type="submit" value="Enviar">
    </form>