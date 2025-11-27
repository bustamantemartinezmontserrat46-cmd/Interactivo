
3P - Guarda información con $_POST
Marco Antonio García Limas
•
9 may (Última modificación: 27 jun)
300
/300
300 puntos de 300
1.- Crea un formulario en HTML con method post y action con los siguientes campos:
Campo de texto Nombre
Campo de texto Apellidos
Campo de texto Edad
Botón enviar

2.- Crea un archivo php para procesar los datos del formulario
Imprime lo datos registrados por el usuario estilo plantilla
y realiza un INSERT con los datos a la tabla personas.

3.- Agrega un enlace (ancla) para retorna a la página con el listado de todas las personas

Se adjuntan diapositivas de ejemplo

Adjunta los archivos .php y captura de pantalla del resultado en la página
Adjunta captura de pantalla de la tabla personas con 5 nuevos registros recién insertados desde php.
Captura de pantalla 2025-05-09 093108.png
Imagen

Captura de pantalla 2025-05-09 094332.png
Imagen

Captura de pantalla 2025-05-09 094353.png
Imagen

Captura de pantalla 2025-05-09 094431.png
Imagen

Captura de pantalla 2025-05-09 095507.png
Imagen

300/300
300/300
Comentarios de la clase
Tu trabajo
Calificado
Montserrat Bustamante Martinez - Guarda información con $_POST
Documentos de Google

registros.php
HTML

procesar_datos.php
HTML

conectar_mysql.php
HTML

Comentarios privados
<!DOCTYPE html>
<html>
    <head>
    <title>Procesar formulario libro de visitas</title>
    </head>
    <body>
        <?php
            $nombre_post=$_POST['campoNombre'];
            $comentario_post=$_POST['campoComentario'];
            $conexion= mysqli_connect("localhost","root","","Procesar_datos");
            if(!$conexion){
                echo "Error:no se pudo conectar a MySQL";
                echo "errno de depuración: " . mysqli_connect_errno();
                echo "error de depuración: " . mysqli_connect_error();
                exit;
            }
            $sql="INSERT INTO personas(nombre,apellidos,edad)VALUES('$nombre_post','$apellidos_post','$edad_post')";
            if(mysqli_query($conexion,$sql)){
                echo"Registro insertado exitosamente";
            }else{
                echo"Error: no se pudo realizar el registro"."<br>".mysqli_error($conexion);
            }
            ?>
            <h3>¡Felicidades <?php echo $nombre_post; ?> !</h1>
            <p>Te has registrado exitosamente, estos son tus datos:</p>
            <p>Nombre: <?php echo $nombre_post;?> </p>
            <p>Apellidos: <?php echo $apellidos_post;?> </p>
            <p>Edad: <?php echo $edad_post;?> </p>
            <a href="conectar_mysql.php" target="_self">Ir a listado</a>
    </body>
</html>