<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/styles-admin.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Preguntas</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
                    <a href="front/encuestas.php">Gestión de Encuestas</a>
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
                    <img style="width: 20%; margin-left: 50px;" src="img/cfe-suministros.jpg" alt="LOGO">
                </a>
            </div>
            <div id="contenido-principal"></div>
            <!--Aqui va el code-->
        </div>

    </div>
</body>

</html>
