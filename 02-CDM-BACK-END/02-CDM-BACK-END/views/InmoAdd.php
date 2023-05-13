<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Inmueble || Tu Inmueble Ideal</title>
    <link rel="stylesheet" href="css/master.css">
</head>

<body>
    <main class="add">
        <header>
            <h2>Adicionar Inmueble</h2>
            <a href="InmoApartamentos.html" class="back"></a>
            <a href="../index.php" class="close"></a>
        </header>
        <form action="../controllers/registrarInmueble.php" method="post" enctype="multipart/form-data">
            
            <input type="file" name="foto" class="upload" aria-describedby="Foto Inmueble">
            <div class="select">
                <select name="tipo">
                    <option value="">Seleccione Tipo de Inmueble...</option>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Aparta Estudio">Aparta Estudio</option>
                    <option value="Casa">Casa</option>
                </select>
            </div>
            <div class="select">
                <select name="categoria">
                    <option value="">Seleccione Categoría...</option>
                    <option value="Arriendo">Arriendo</option>
                    <option value="Venta">Venta</option>
                </select>
            </div>
            <input type="number" name="precio" placeholder="Precio...">
            <input type="number" placeholder="Tamaño..." name="tamano">
            <input type="text" placeholder="Ciudad..." name="ciudad">
            <input type="text" placeholder="Localidad/Barrio..." name="barrio">
            
            <button type="submit" class="btn-home">Guardar</button>
        </form>
    </main>
</body>

</html>