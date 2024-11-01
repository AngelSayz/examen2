<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../config/connection.php';
    $dbConnection = new connection();
    $db = $dbConnection->getConnection();

    $vendedor_id = $_POST['vendedor'];
    $propiedad_id = $_POST['casa'];
    $fecha = $_POST['fecha'];

    $query = "INSERT INTO propiedades_vendidas (vendedores_id, propiedades_id, fecha) VALUES ('$vendedor_id', '$propiedad_id', '$fecha')";

    $result = mysqli_query($db, $query);

    if ($result) {
        echo "<br> Propiedad vendida registrada correctamente";
    } else {
        echo "<br> Error al registrar la propiedad vendida";
    }
}