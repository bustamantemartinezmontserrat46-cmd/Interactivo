<!DOCTYPE html>
<html>

<head>
    <meta charset = "UTF-8" />

    <title>Listado</title>

    <style>


        .header {
			background-color: #1f4b6e;
			color:#fff;
			padding:14px;
			border-radius:8px;
			text-align:center;
			margin:20px auto 10px;
			max-width:720px;
		}

        .contenedor {
			max-width:720px;
			margin:0 auto;
			padding:20px;

			background-color:#f1f8ff;
			border:1px solid #143a56;
			border-radius:12px;
			padding:20px;
			box-shadow: 0 6px 18px rgba(0,0,0,0.4);
		}

        .btn {
			background-color: #1f4b6e;
			color:#fff;
			border:none;
			padding:10px 16px;
			border-radius:8px;
			font-size:16px;
		}

       
        table#table {
            width: 100%;
            border-collapse: collapse;
        }
        table#table th,
        table#table td {
            border: 1px solid #bbb;
            padding: 6px 8px;
            text-align: left;
        }
        table#table th {
            background: #eee;
            font-weight: 600;
        }
        table#table tr:hover {
            background: #f9f9f9;
        }

    </style>

</head>

<body>

    <?php
    $conexion = mysqli_connect("sql302.infinityfree.com","if0_40475211","WEimgDsvW1Wq","if0_40475211_interactivo");

    if(!$conexion){
        echo "Error: Nose pudo conectar a MySQL.";
        echo "errno de depuracion: " . mysqli_connect_errno();
        echo " error de depuracion: " . mysqli_connect_error();
        exit;

    }

    $resultado = mysqli_query($conexion, "SELECT ID, Nombre, Comentario FROM Visitantes");

    ?>

    <div class = "header">
        <h1>Registros</h1>
    </div>

    <div class = "contenedor" >
        <table id = "table">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cometario</th>
               
                
            <tr>
            <?php
            while($fila = $resultado->fetch_assoc()){
                $id = $fila['ID'];
                $nombre = $fila['Nombre'];
                $comentario = $fila['Comentario'];
                

                echo "<tr>";
                echo "<td>";
                echo $fila['ID'];
                echo "</td>";
                echo "<td>";
                echo $fila['Nombre'];
                echo "</td>";
                echo "<td>";
                echo $fila['Comentario'];
                echo "</td>";
                echo "</tr>";

                
            };
            mysqli_close($conexion);
            
            
            ?>

        <table>
        
        <br>
        <a class="btn" href="Interactiva.html">Regresar al interactivo</a>
    </div>
</body>

</html>