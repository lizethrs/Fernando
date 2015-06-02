<?php
include('conexion.php');
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <br>
    <center>
        <form action="definiciontorneo.php" class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:serif;color:#34495E;max-width:480px;min-width:150px; " method="post">

            <div class="title"><h2></h2></div>
            <label  style="font-size: 20px">Tipo de torneo:</label>
            <br><br>
            <select id="tipo" name="tipo" style="  width: 150px;
                    height: 25px;
                    padding: 5px 5px 5px 5px;">
                <option value="1">Eliminación directa</option>
                <option value="2">Reclasificación</option>
            </select>
            <br><br>
            <label style="font-size: 20px">Número de equipos:</label>
            <br><br>
            <input size="5" id="equipo" name="equipos" type="text"/>
            <br><br>
            <label style="font-size: 20px">Nombre del torneo:</label>
            <br><br>
            <input  id="nombre" name="nombre" type="text"/>
            <br><br>
            <input type="submit" id="guardar" value="Guardar" name="guardar"/>
        </form>
    </center>
</body>

</html>
<?php
if (isset($_POST['guardar'])) {
    $tipo = $_POST['tipo'];
    $equipos = $_POST["equipos"];
    $nombre = $_POST['nombre'];
    $resto = $equipos % 2;
    if ($tipo == 1) {
        if ($resto == 0 && $equipos <= 20 && $equipos != 0 && $equipos != 1) {


            $query = mysql_query("INSERT INTO tb_torneo (id,tipo,Nombre,Deporte) VALUES (NULL,'$tipo','$nombre','1')");
            if ($query) {

                header("location:principal.php");
            } else {
                echo "Error";
            }
        } else {
            echo "Datos inválidos";
        }
    } else {
        if ($equipos <= 20 && $equipos != 0 && $equipos != 1) {

            $tipo = $_POST['tipo'];
            $query = mysql_query("INSERT INTO tb_torneo (id,tipo,Nombre,Deporte) VALUES (NULL,'$tipo','$nombre','1')");
            if ($query) {

                header("location:principal.php");
            } else {
                echo "Error";
            }
        } else {
            echo "Datos inválidos";
        }
    }
}
?>

