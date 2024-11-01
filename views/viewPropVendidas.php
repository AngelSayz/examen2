<?php
require_once '../config/connection.php';

$conn = new connection();
$connection = $conn->getConnection();

$query = "
    SELECT
        v.nombre,
        COUNT(p.id) AS propiedades_vendidas
    FROM
        vendedores AS v
    INNER JOIN
        propiedades_vendidas AS pv ON v.id = pv.vendedores_id
    INNER JOIN
        propiedades AS p ON pv.propiedades_id = p.id
    GROUP BY
        v.nombre;
";

$result = $connection->query($query);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Nombre del Vendedor</th>
                <th>Propiedades Vendidas</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['nombre']) . "</td>
                <td>" . htmlspecialchars($row['propiedades_vendidas']) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->closeConnection();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Propiedades Vendidas</title>
</head>
<body>
    <div>
        <a href="../index.php">Volver</a>
    </div>
</body>
</html>