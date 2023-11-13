<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="resources/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<style>
    .aaa{
        width: 450px;
        height: 100%;
        margin: 20px;
        margin-top: 300px;
    }
    .aaa h4{
        margin: 10px;
    }
    .aaa input{
        margin: 10px;
        background-color: white;
    }
</style>
<body>
    <div class="scrollToTop-btn flex-center">
        <i class="fas fa-arrow-up"></i>
    </div>
    <?php
    require 'views/header.php';
    ?>
    <section class="home flex-center"> 
        <div class="aaa" >
            <form action="Crud/guardarRostro.php" method="post" enctype="multipart/form-data">
            <h3>Formulario de Productos</h3>
                <h4 for="rostro">Rostro:</h4>
                <input type="text" name="rostro" id="rostro" placeholder="rostro" required>
                <h4>Caracteristica</h4>
                <textarea  name="caracteristica" id="caracteristica"style="resize: none;height:100px; padding: 1em 1em;font-size: 14px;" placeholder="Descripción del producto..."  required></textarea>
                <h4 for="imagen">Imagen:</h4>
                <input type="file" name="imagen" id="imagen" required>
                <h4 for="descripcion">Descripción:</h4>
                <textarea name="descripcion" id="descripcion"style="resize: none;height:100px; padding: 1em 1em;font-size: 14px;" placeholder="Descripción del producto..." required></textarea>
                <input class="buton" type="submit" value="Guardar Producto">
            </form>
        </div>

    </section>
    
    <script src="resources/js/main.js"></script>
</body>
</html>