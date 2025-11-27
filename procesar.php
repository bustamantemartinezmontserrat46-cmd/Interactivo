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