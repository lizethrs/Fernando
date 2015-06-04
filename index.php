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
        <div class="row">
            <div class="col-md-10 col-md-offset-3">
                <form action="comprobar.php" method="post">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2"><br></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2"> 
                            <label>Usuario</label>
                            <input type="text" class="form-control" name="user" style="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2"> 
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="pass" style="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2"><br></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-1 text-center"> 
                            <button type="submit" class="btn btn-success" name="iniciar">Iniciar sesión</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </body>
</html>