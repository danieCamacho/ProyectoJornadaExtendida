
<?php 
    if(isset($_SESSION['usuariopersona']->rol)){
    //echo  $_SESSION['usuariopersona']->rol;
    }
    else{
    header('location: ?controller=login');
    }
    $ocultar="";
    if($_SESSION['usuariopersona']->rol == "Estudiante")
    {    
    $ocultar="none";
    }
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Jornada Extendida SI GP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
        
        
        <link href="assets/styles/main.css" rel="stylesheet">
        <link href="assets/styles/main_styles.css" rel="stylesheet">
        <link href="assets/styles/bootstrap.min.css" rel="stylesheet">
        <link href="assets/datatables/datatables.min.css" rel="stylesheet">
    </head>
    <body class="poppins">
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-header header-shadow">
                <div class="app-header__logo">   
                    <div class="logo-src"><a href="?controller=home"><img src="assets/images/logojornadaextendida.ico" width="105"></a></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                <div class="app-header__content">
                    <div class="app-header-left">
                        <div class="search-wrapper">
                            <div class="input-holder">
                                <input type="text" class="search-input" placeholder="Type to search">
                                <button class="search-icon"><span></span></button>
                            </div>
                            <button class="close"></button>
                        </div>        
                    </div>
                    <div class="app-header-right">
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left  ml-3 header-user-info">
                                        <div class="widget-heading">
                                            <?php echo $_SESSION['usuariopersona']->rol ?>
                                        </div>
                                        <div class="widget-subheading">
                                            <?php echo $_SESSION['usuariopersona']->persona ?> <?php echo $_SESSION['usuariopersona']->apersona ?>
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                <img width="42" class="rounded-circle" src="assets/images/usuario.png" alt="">
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                <a type="button" tabindex="0" class="dropdown-item" href="?controller=usuario&method=info&id=<?php echo $_SESSION['usuariopersona']->id_usuario ?>">Informacion Personal</a>
                                                <a href="?controller=login&method=logout" tabindex="0" class="dropdown-item"><i class=" fas fa-power-off"></i>Cerrar Sesion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                            <div class="header__pane ml-auto">
                                <div>
                                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="app-header__mobile-menu">
                            <div>
                                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                        </div>
                        <div class="scrollbar-sidebar">
                            <div class="app-sidebar__inner">
                                <ul class="vertical-nav-menu">
                                    <li class="app-sidebar__heading">Modulos</li>
                                    <li style="display: <?php echo $ocultar; ?>">
                                        <a href="?controller=centrointeres">
                                            <i class="metismenu-icon fa fa-dribbble"></i>
                                            Centros de Interés
                                        </a>
                                        
                                    </li>
                                    <li style="display: <?php echo $ocultar; ?>">
                                        <a href="?controller=inscripcion">
                                            <i class="metismenu-icon far fa-address-card"></i>
                                            Inscripcion
                                        </a>
                                        
                                    </li>
                                    <li style="display: <?php echo $ocultar; ?>">
                                        <a href="?controller=rolusu">
                                            <i class="metismenu-icon fas fa-people-arrows"></i>
                                            Roles
                                        </a>
                                        
                                    </li>
                                    <li>
                                        <a href="?controller=usuario">
                                            <i class="metismenu-icon fas fa-user"></i>
                                            Usuarios
                                        </a>
                                        
                                    </li>
                                    <li style="display: <?php echo $ocultar; ?>">
                                        <a href="?controller=profesor">
                                            <i class="metismenu-icon fa fa-chalkboard-teacher"></i>
                                            Profesor
                                        </a>
                                    </li>
                                    <li style="display: <?php echo $ocultar; ?>">
                                        <a href="?controller=grado">
                                            <i class="metismenu-icon fa fa-graduation-cap"></i>
                                            Grado
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                    <div class="app-main__outer">
                        <div class="app-main__inner">
                        <!-- main -->    
                        

