<?php
include '../config/connection.php';

$dbConnection = new connection();
$db = $dbConnection->getConnection();

$sellersQuery = "SELECT id, nombre FROM vendedores";
$sellersResult = $db->query($sellersQuery);

$propertiesQuery = "SELECT id, titulo FROM propiedades";
$propertiesResult = $db->query($propertiesQuery);
?>

<title>Vendedores</title>
</head>
<body>
    <div>
    <form action="../app/Controllers/propiedadesVendidas.php" method="post">
        <fieldset>
            <legend>Información de Venta</legend>
            
            <label for="vendedor">Vendedor:</label>
            <select id="vendedor" name="vendedor" required>
                <option value="">Seleccione un vendedor</option>
                <?php while ($seller = $sellersResult->fetch_assoc()): ?>
                    <option value="<?php echo $seller['id']; ?>"><?php echo $seller['nombre']; ?></option>
                <?php endwhile; ?>
            </select><br><br>

            <label for="casa">Casa:</label>
            <select id="casa" name="casa" required>
                <option value="">Seleccione una casa</option>
                <?php while ($property = $propertiesResult->fetch_assoc()): ?>
                    <option value="<?php echo $property['id']; ?>"><?php echo $property['titulo']; ?></option>
                <?php endwhile; ?>
            </select><br><br>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
            <br><br>

            <input type="submit" value="Registrar Venta">
        </fieldset>
    </form>
    </div>
    <div>
        <a href="../index.php">Volver</a>
    </div>
</body>
</html>