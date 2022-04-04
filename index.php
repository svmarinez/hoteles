<?php
  declare(strict_types = 1);
  include 'includes/autoloader.inc.php'
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400&family=Raleway:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel='stylesheet' type='text/css' href='./styles/styles.php' />
    <title>Hoteles!</title>
</head>
<body>
    <h1 class="text-center m-4 p-4">Hoteles</h1>
    <div class="container col">
        <section class="w-50 float-start p-4">
            <p>Dar de alta a un hotel con el siguiente formulario:</p>
            <form action="submit" method="post">
                <div class="mb-3">
                    <label for="nombre">Nombre de Hotel</label>
                    <input class="float-end col-6" type="text" name="nombre" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="localidad">Localidad</label>
                    <input class="float-end col-6" type="text" name="localidad" id="localidad">
                </div>
                <div class="mb-3">
                    <label for="provincia">Provincia</label>
                    <input class="float-end col-6" type="text" name="provincia" id="provincia">
                </div>
                <div class="mb-3">
                    <label for="precio">Precio Por Noche (€)</label>
                    <input class="float-end col-6" type="number" name="precio" id="precio">
                </div>
                <div class="mb-3">
                    <label for="num_habitaciones">Número de Habitaciones</label>
                    <input class="float-end col-6" type="number" name="num_habitaciones" id="num_habitaciones">
                </div>
                <div class="mb-3">
                    <label for="hab_disponibles">Habitaciones Disponibles</label>
                    <input class="float-end col-6" type="number" name="hab_disponibles" id="hab_disponibles">
                </div>
                <div class="text-center col-12">
                    <button class="btn btn-primary" type="submit">DAR DE ALTA</button>
                </div>
            </form>
        </section>
        <section class="w-50 float-end p-4">
            <p>Buscar en la base de datos con este formulario:</p>   
        <form action="submit" method="get">
            <div class="mb-3">
                    <label for="nombre">Nombre de Hotel</label>
                    <input class="float-end col-6" type="text" name="nombre" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="localidad">Localidad</label>
                    <input class="float-end col-6" type="text" name="localidad" id="localidad">
                </div>
                <div class="mb-3">
                    <label for="provincia">Provincia</label>
                    <input class="float-end col-6" type="text" name="provincia" id="provincia">
                </div>
                <div class="text-center col-12">
                    <button class="btn btn-secondary" type="submit">BUSCAR</button>
            </form>
        </section>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>