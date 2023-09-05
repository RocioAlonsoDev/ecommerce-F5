<h1>Editar mis datos</h1>
<form method="POST" action='/user/{{$user->user_id}}'>
    {{csrf_field()}}
    <input type='hidden' name="user_id" value="{{$user->user_id}}">
    <label for="email">Correo electrónico</label>
    <br>
    <input type="text" name="email" value="<?=$user->email?>">
    <br>
    <label for="password">Contraseña</label>
    <br>
    <input type="password" name="password" value="<?=$user->password?>">
    <br>
    <label for="name">Nombre</label>
    <br>
    <input type="text" name="name" value="<?=$user->name?>">
    <br>
    <label for="surname">Apellidos</label>
    <br>
    <input type="text" name="surname" value="<?=$user->surname?>">
    <br>
    <label for="phone">Teléfono móvil</label>
    <br>
    <input type="tel" name="phone" value="<?=$user->phone?>">
    <br>
    <label for="address">Dirección</label>
    <br>
    <input type="text" name="address" value="<?=$user->address?>">
    <br>
    <input type="checkbox" name="newsletter" value="<?=$user->newsletter?>">
    <label for="newsletter">Suscríbete a nuestra newsletter para estar al tanto de nuestras últimas ofertas. </label>
    <br>
    <input type="submit" value="Enviar">
</form>