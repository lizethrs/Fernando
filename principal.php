<?php
include('conexion.php');
session_start();
?>
<html>
    <body>
    <head>
        <link rel="stylesheet" href="styles.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
        <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    </head>
    <center><label style="color:#27AE60;font-size: 30px;">Aplicación de torneos Fernando</label></center>

    <a href="index_1.php" style="float:right;margin-right: 10px">Salir</a>
    <br><br>
    <div role="tabpanel">

        <ul class="nav nav-tabs" role="tablist" id="principal">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Jugadores</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Equipos</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Partidos</a></li>
        </ul>
<!-- ----------------------------------------------------------->
             <!-- ---------------------------JUGADORES -------------------------------->
              <!-- ----------------------------------------------------------->
             
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                       
                                    <h2 style="">Nuevo jugador</h2><hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2"> 
                                    <label>Primer nombre:</label>
                                    <input type="text" class="form-control" name="nombre1" style="" >
                                </div>
                                <div class="col-md-4 "> 
                                    <label>Segundo nombre:</label>
                                    <input type="text" class="form-control" name="nombre2" style="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2"> 
                                    <label>Primer apellido:</label>
                                    <input type="text" class="form-control" name="apellido1" style="">

                                </div>
                                <div class="col-md-4"> 
                                    <label>Segundo apellido:</label>
                                    <input type="text" class="form-control" name="apellido2" style="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2"> 
                                    <label>Equipo:</label>

                                    <select class="form-control" style="" name="equipo">
                                        <?php
                                        $equipos = mysql_query("SELECT * from tb_equipos ORDER BY Nombre asc");
                                        while ($listaequipos = mysql_fetch_array($equipos)) {
                                            ?>
                                            <option value="<?php echo $listaequipos['id_equipo']; ?>"><?php echo $listaequipos['Nombre']; ?> </option>

                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2"> 
                                    <label>Fecha de nacimiento:</label>
                                    <input type="date" class="form-control" name="fecha" style="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-right"> 
                                    <button type="submit" class="btn btn-success" name="guardar">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div></div>
            </div>
            <!-- ----------------------------------------------------------->
             <!-- ---------------------------EQUIPOS -------------------------------->
              <!-- ----------------------------------------------------------->
             
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 style="">Nuevo equipo</h2><hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2"> 
                                    <label>Nombre del equipo:</label>
                                    <input type="text" class="form-control" name="nombre" style="">
                                </div>
                                <div class="col-md-4"> 
                                    <label>Técnico:</label>
                                    <input type="text" class="form-control" name="tecnico" style="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-right"> 
                                    <button type="submit" class="btn btn-success" name="enviar">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div></div>
            </div>
            <!-- ----------------------------------------------------------->
             <!-- ---------------------------PARTIDOS -------------------------------->
              <!-- ----------------------------------------------------------->
             
            
            <div role="tabpanel" class="tab-pane" id="messages">
                    <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 style="">Nuevo partido</h2><hr>
                                </div>
                            </div>
                        <div class="row">
                                <div class="col-md-4 col-md-offset-2"> 
                                    <label>Equipo 1:</label>

                                    <select class="form-control" style="" name="equipo1">
                                        <?php
                                        $equipos = mysql_query("SELECT * from tb_equipos ORDER BY Nombre asc");
                                        while ($listaequipos = mysql_fetch_array($equipos)) {
                                            ?>
                                            <option value="<?php echo $listaequipos['id_equipo']; ?>"><?php echo $listaequipos['Nombre']; ?> </option>

                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            <div class="col-md-4"> 
                                    <label>Equipo 2:</label>

                                    <select class="form-control" style="" name="equipo2">
                                        <?php
                                        $equipos = mysql_query("SELECT * from tb_equipos ORDER BY Nombre asc");
                                        while ($listaequipos = mysql_fetch_array($equipos)) {
                                            ?>
                                            <option value="<?php echo $listaequipos['id_equipo']; ?>"><?php echo $listaequipos['Nombre']; ?> </option>

                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2"> 
                                    <label>Fecha:</label>
                                    <input type="date" class="form-control" name="fecha" style="">

                                </div>
                                <div class="col-md-4"> 
                                    <label>Lugar</label>
                                    <select name="lugar" class="form-control" >
                                       
                                       
                                         <option value="Cancha1">Cancha1</option>
                                          <option value="Cancha2">Cancha2</option>
                                           <option value="Cancha3">Cancha3</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br></div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-right"> 
                                    <button type="submit" class="btn btn-success" name="ir">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div></div>
            </div>
        </div>

    </div>
    <script>
        $(function () {
            $('#principal').tab();
        })


    </script>
</body>
</html>
<?php
if (isset($_POST["guardar"])) {
    $nombre1 = $_POST["nombre1"];
    $nombre2 = $_POST["nombre2"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $fecha = $_POST["fecha"];
    $nombres = $nombre1 . " " . $nombre2;
    $apellidos = $apellido1 . " " . $apellido2;
    $equipo = $_POST["equipo"];

    $query = mysql_query("INSERT INTO tb_jugadores (id,Nombre,Apellido,Fecha,Equipo) VALUES (NULL,'$nombres','$apellidos','$fecha','$equipo')");
    if ($query) {
        ?>
        <script>alert("Agregado con éxito");</script>
        <?php
    } else {
        echo "Error";
    }
}
if (isset($_POST["enviar"])) {
                $torneo=  $_SESSION['torneo'];
    $nombre = $_POST["nombre"];
    $tecnico = $_POST["tecnico"];
    $query = mysql_query("INSERT INTO tb_equipos (id_equipo,Nombre,Tecnico,torneo) VALUES (NULL,'$nombre','$tecnico','$torneo')");
    if ($query) {
        ?>
        
        <script>alert("Agregado con éxito");</script>
        
        <?php

    } else {
        echo "Error";
    }
}
if (isset($_POST["ir"])) {
    $equipo1 = $_POST["equipo1"];
    $equipo2 = $_POST["equipo2"];
    $fecha = $_POST["fecha"];
    $lugar = $_POST["lugar"];
    $query = mysql_query("INSERT INTO tb_partidos (equipo1,equipo2,resultado1,resultado2,fecha,lugar,estado,id) "
            . "VALUES ('$equipo1', '$equipo2','0','0','$fecha','$lugar','Programado',NULL");
    if ($query) {
        ?>
        <script>alert("Agregado con éxito");</script>
        <?php
    } else {
        echo "Error";
    }
}
?>
