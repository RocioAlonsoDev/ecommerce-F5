<h1>Regístrate y realiza tu pedido</h1>

<form method="POST" action="{{url('/success')}}">
        {{csrf_field()}}
        <label for="email">Correo electrónico</label>
        <br>
        <input type="text" name="email">
        <br>
        <label for="password">Contraseña</label>
        <br>
        <input type="password" name="password">
        <br>
        <label for="name">Nombre</label>
        <br>
        <input type="text" name="name">
        <br>
        <label for="surname">Apellidos</label>
        <br>
        <input type="text" name="surname">
        <br>
        <label for="phone">Teléfono móvil</label>
        <br>
        <input type="tel" name="phone">
        <br>
        <label for="address">Dirección</label>
        <br>
        <input type="text" name="address">
        <br>
        <input type="checkbox" name="newsletter">
        <label for="newsletter">Suscríbete a nuestra newsletter para estar al tanto de nuestras últimas ofertas. </label>
        <br>
        <input type="submit" value="Enviar">
    </form>