<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <script>
            window.onload = function () {

                document.getElementById("file").onchange = function () {
                    var file = document.getElementById("file");
                    
                    //Comprueba el tamaño del archivo
                    if (file.files[0].size > 10485760) {
                        alert("El archivo sobrepasa los 10MB. Peso real (debug): " + file.files[0].size);
                        file.value = "";
                    }
                }
            }
        </script>
    </head>
    <body>
        <h1>Descarga de ficheros</h1>
        <form action="descargas.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Datos de usuario</legend>
                Usuario: <input type="text" name="user">
                Contraseña: <input type="text" name="pass">

                <h3>Selecciona fichero</h3>

                <input type="file" id="file" name="file">
                <br>
                <br>
                <input type="submit" value="Acceder">
            </fieldset>
        </form>
    </body>
</html>