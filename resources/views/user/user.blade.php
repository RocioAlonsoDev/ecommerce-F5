<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food House - Mi perfil</title>
</head>
<body>
    <div style='display:flex;gap:20px;'>
        <a href='/'>Carta</a>
        <a href='/dish/1'>Patatas Bravas</a>
        <a href='/about-us'>Sobre nosotros</a>
        @if (auth()->user())
        <a href='/user/{{auth()->user()->user_id}}'>Mi perfil</a>
        <a href='/user/login'>Cerrar sesión</a>
        @else
        <a href='/user/login'>Iniciar Sesión</a>
        <a href='/user/signup'>Registrarse </a>
        @endif
    </div>
    

    <h1>Esto es el usuario número <?=$user->user_id?></h1>
    <p><?=$user->name?></p>
    <p><?=$user->surname?></p>
    <p><?=$user->email?></p>
    <p><?=$user->address?></p>
    <p><?=$user->phone?></p>

    <a href="/user/{{auth()->user()->user_id}}/edit">Editar mis datos</a>
    <a href="/user/{{auth()->user()->user_id}}/delete">Eliminar cuenta</a>
</body>
</html>