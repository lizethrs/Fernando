<?php
include('conexion.php');
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
        <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br>
        <div class="row">
            <div class="col-md-10 col-md-offset-3">
                <form action="definiciontorneo.php" method="post">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2"> 
                            <label>Tipo de torneo:</label>

                            <select class="form-control" style="" name="tipo">
                                <option value="1">Eliminación directa</option>
                                <option value="2">Reclasificación</option>
                            </select>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-8 col-md-offset-2"><br></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2"> 
                            <label>Número de equipos:</label>
                            <input type="text" class="form-control" name="equipos" style="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2"><br></div>
                    </div>
                     <div class="row">
                        <div class="col-md-4 col-md-offset-2"> 
                            <label>Nombre del torneo:</label>
                            <input type="text" class="form-control" name="nombre" style="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2"><br></div>
                    </div>
                     <div class="row">
                        <div class="col-md-6 col-md-offset-1 text-center"> 
                            <button type="submit" class="btn btn-success" name="guardar">Guardar</button>
                        </div>
                    </div>
                </form>
            </div></div>
<!--<center>-->
        <!--        <form action="definiciontorneo.php" class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:serif;color:#34495E;max-width:480px;min-width:150px; " method="post">
        
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
                </form>-->
        <!--</center>-->
    </body>

</html>
<?php
if (isset($_POST['guardar'])) {
    session_start();
    $tipo = $_POST['tipo'];
    $equipos = $_POST["equipos"];
    $nombre = $_POST['nombre'];
    $resto = $equipos % 2;
    if ($tipo == 1) {
        if ($resto == 0 && $equipos <= 20 && $equipos != 0 && $equipos != 1) {


            $query = mysql_query("INSERT INTO tb_torneo (id,tipo,Nombre,Deporte) VALUES (NULL,'$tipo','$nombre','1')");
            if ($query) {
                $nuevo = mysql_fetch_array(mysql_query("SELECT id FROM tb_torneo WHERE Nombre='$nombre' and tipo='$tipo'"));
                $_SESSION['torneo'] = $nuevo['id'];
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
                $nuevo = mysql_fetch_array(mysql_query("SELECT id FROM tb_torneo WHERE Nombre='$nombre' and tipo='$tipo'"));
                $_SESSION['torneo'] = $nuevo['id'];
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

