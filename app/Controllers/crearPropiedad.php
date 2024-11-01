<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include '../Models/Propiedad.php';
    include '../../config/connection.php';
    $dbConnection = new connection();
    $db = $dbConnection->getConnection();
    $propiedad = new Propiedad(
        null,
        $_POST['titulo'],
        $_POST['precio'],
        $_POST['imagen'],
        $_POST['descripcion'],
        $_POST['num_rooms'],
        $_POST['num_wc'],
        $_POST['num_garage'],
        $_POST['date'],
    );

    $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, num_rooms, num_wc, num_garage, created) VALUES (
        '{$propiedad->titulo}', 
        '{$propiedad->precio}', 
        '{$propiedad->imagen}', 
        '{$propiedad->descripcion}', 
        '{$propiedad->num_rooms}', 
        '{$propiedad->num_wc}', 
        '{$propiedad->num_garage}', 
        '{$propiedad->created}', 
    )";
    $result = mysqli_query($db, $query);

    if($result){
        echo "<br> Propiedad creada correctamente";
    } else {
        echo "<br> Error al crear la propiedad";
    }
}


