<form action="../app/Controllers/crearPropiedad.php" method="POST">
    <fieldset>
        <legend>Información de la Propiedad</legend>
        
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required>

        <label for="imagen">Imagen:</label>
        <input type="text" id="imagen" name="imagen" required>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
    </fieldset>

    <fieldset>
        <legend>Detalles Adicionales</legend>
        
        <label for="num_rooms">Número de Habitaciones:</label>
        <input type="number" id="num_rooms" name="num_rooms" required>

        <label for="num_wc">Número de Baños:</label>
        <input type="number" id="num_wc" name="num_wc" required>

        <label for="num_garage">Número de Garajes:</label>
        <input type="number" id="num_garage" name="num_garage" required>
    </fieldset>

    <input type="submit" value="Registrar Propiedad">
    
    <div>
        <a href="../index.php">Volver</a>
    </div>
</form>
