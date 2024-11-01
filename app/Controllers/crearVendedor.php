<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include '../../config/connection.php';
    include '../Models/Vendedor.php';

    $dbConnection = new connection();
    $db = $dbConnection->getConnection();

    $vendedor = new Vendedor(null, $_POST['nombre'], $_POST['email'], $_POST['phone']);
    $nombre = $vendedor->getNombre();
    $email = $vendedor->getEmail();
    $phone = $vendedor->getPhone();

    $query = "INSERT INTO vendedores (nombre, email, phone) VALUES ('$nombre', '$email', '$phone')";

    $result = mysqli_query($db, $query);

    if($result){
        echo "<br> Vendedor registrado";
    } else {
        echo "<br> Error al registrar al vendedor";
    }
}