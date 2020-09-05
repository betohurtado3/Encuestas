<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    

    <?php require "../back/conecta.php";
            $identificador=$_GET['id'];
            $sql="SELECT * FROM preguntas WHERE id='$identificador'";

            $res=mysqli_query($con, $sql);
            $row=mysqli_fetch_assoc($res);
    ?>

    
    </head>


</html>





<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/styles-admin.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Preguntas</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script>
            function validacion() {
            var CAMP = document.formulario.campaña.value;
            var PREG = document.formulario.preguntas.value;

            if (CAMP == "" | PREG == "") {
                alert("Campos Faltantes")
                return false;
            } else
                return true;

        } // TERMINA EL CODIO JS PARA VALIDAR LOS CAMPOS

        $(document).ready(function() {
            $("#boton").on('click', function() {
                if (validacion()) { ///Si los campos estan llenos
                    var form = $('#formulario')[0];
                    var data = new FormData(form);

                    $.ajax({
                        url: '../back/editar-encuesta.php',
                        type: 'POST',
                        dataType: 'text',
                        data: data,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(respuesta) {
                            if (respuesta == 0)
                                alert('Registro incorrecto')
                            else {
                                alert('Edicion Completada')
                                location.href="encuestas.php";
                            }
                        }

                    }); ///Fin del ajax
                } ///Termina el if de la funcion de validacion 
            }); ///Funcion de click en un boton
        }); ///Fin de la funcion ready   
    </script>

</head>
<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h2>Menú</h2>
            </div>
            <ul class="list-unstyled components">
                <p>Panel Administrativo</p>
                <li class="active">
                    <a href="#homeSubmenuMatrix" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Motivos de Visitas</a>
                    <ul class="collapse list-unstyled" id="homeSubmenuMatrix">
                         <li>
                            <a href="#">División</a>
                        </li>
                        <li>
                            <a href="#">Zona</a>
                        </li>
                        <li id="motivoCAC">
                            <a href="#">CAC</a>
                        </li>
                        <li>
                            <a href="#">Generar Reporte Específico</a>
                        </li>
                    </ul>
                </li>                                                                                    
                <li class="active">
                    <a href="#homeSubmenuEjecutivo" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Evaluación de Ejecutivo</a>
                    <ul class="collapse list-unstyled" id="homeSubmenuEjecutivo">
                         <li>
                            <a href="#">División</a>
                        </li>
                        <li>
                            <a href="#">Zona</a>
                        </li>
                        <li id="ejecutivoCAC">
                            <a href="#">CAC</a>
                        </li>
                        <li>
                            <a href="#">Generar Reporte Específico</a>
                        </li>
                    </ul>
                </li>  
                <li id="ejecutivo">
                    <a href="#">Gestión de Ejecutivo</a>
                </li>
                <li>  
                    <a href="encuestas.php">Gestión de Encuestas</a>
                </li> 
                <li>
                    <a href="#">Gestión de Sitios</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Configuración</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu2">
                        <li>
                            <a href="Front/usuarios.php">Usuarios</a>
                        </li>
                    </ul>
                </li>               
            </ul>            
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <div class="header-content" style="display:flex; justify-content: space-between;">
                <h2>Inicio</h2>
                
                <a href="static/php/cerrar-sesion.php" style="padding: 10px;" >Cerrar Sesión</a>
            
            </div>
            <div class="logo">
                <a href="admin.php">
                    <img style="width: 20%; margin-left: 50px;" src="../img/cfe-suministros.jpg" alt="LOGO">
                </a>
            </div>
            <div id="contenido-principal">
            <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <br>
                <br>
                <!-- Formulario -->
                <hr>
                
                <form id="formulario" name="formulario" enctype="multipart/form-data">
            <label>Identificador:</label>
            <input type="number" class="form-control" name="id" readonly value="<?= $row['id'] ?>">

            <label>Campaña:</label>
            <input type="text" class="form-control" name="campaña" value="<?= $row['campaña'] ?>">

            <label>Pregunta:</label>
            <input type="text" class="form-control" name="preguntas" value="<?= $row['preguntas'] ?>">          
            <hr><br>
            <input id="boton" onclick="validacion()" class="btn btn-warning" type="button" value="Editar">
            <a href="javascript:history.back()">Regresar</a>
            </form>                
            
                <!-- Fin Del Formulario -->
            </div>
        </div>
    </div>
            </div>
            <!--Aqui va el code-->              
            
        </div>
    </div>
</body>
</html>



