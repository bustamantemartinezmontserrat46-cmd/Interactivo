<!DOCTYPE html>
<html>
    <head>
    <title>Procesar formulario libro de visitas</title>
    </head>
    <body>
        <?php
            $nombre_post=$_POST['campoNombre'];
            $comentario_post=$_POST['campoComentario'];
            $conexion=mysqli_connect("sql302.infinityfree.com","if0_40475211","WEimgDsvW1Wq","if0_40475211_interactivo");
            if(!$conexion){
                echo "Error:no se pudo conectar a MySQL";
                echo "errno de depuración: " . mysqli_connect_errno();
                echo "error de depuración: " . mysqli_connect_error();
                exit;
            }
            $sql="INSERT INTO Visitantes(Nombre,Comentario)VALUES('$nombre_post','$comentario_post')";
            if(mysqli_query($conexion,$sql)){
                echo"Registro insertado exitosamente";
            }else{
                echo"Error: no se pudo realizar el registro"."<br>".mysqli_error($conexion);
            }
            ?>
            <h3>¡Felicidades <?php echo $nombre_post; ?> !</h1>
            <p>Te has registrado exitosamente, estos son tus datos:</p>
            <p>Nombre: <?php echo $nombre_post;?> </p>
            <p>Comentario: <?php echo $comentario_post;?> </p>
            <a href="listado.php" target="_self">Ir a listado</a>
            <a href="Interactiva.html" target="_self">Ir a interactivo</a>
    </body>
</html>