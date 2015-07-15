<html>
<head>
    <title>Lista de tus mascotas</title>
</head>
<body>
    <h1>ESTA LISTA ES TEMPORAL</h1><br/>
    <?php if(!empty($mascotas)):?>
    <ul>
        <?php foreach($mascotas as $key => $mascota):?>
            <li>
                <span>Nombre: <?php echo $mascota["nombre"];?></span>
                <span>Raza: <?php echo $mascota["raza"];?></span>
                <span><a href="/user/user-profile/<?php echo $mascota["own"]."/". $mascota["uuid"];?>">Ver perfil</a></span>
            </li>
        <?php endforeach;?>
    </ul>
    <?php else:?>
        <h4>No hay contenido disponible</h4>
    <?php endif;?>
</body>
</html>