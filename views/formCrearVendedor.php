<form action="../app/Controllers/crearVendedor.php" method="POST">
    <fieldset>
        <legend>Información del Vendedor</legend>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Celular:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div>
            <input type="submit" value="Registrar Vendedor">
        </div>
    </fieldset>
    <div>
        <a href="../index.php">Volver</a>
    </div>
</form>