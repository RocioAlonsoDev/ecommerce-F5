<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food House</title>
</head>
<body>
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
        <a href='/dish/patatas'>Patatas Bravas</a>
        <a href='/user/1'>Mi perfil</a>
        <a href='/about-us'>Sobre nosotros</a>
    </div>
    

    <h1>Esto es el plato : <?=$dish_name?></h1>
</body>
</html>