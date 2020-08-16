<?php 
require('../templates/parts/header.php');
?>

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
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
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Busqueda">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
       
        </div>        <div class="app-main">
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
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Opciones</li>

                               
                                <li>
                                <a href="?p=cliente" class="">
                                        <i class="fa fa-address-book"></i>
                                        Cliente
                                    </a> 
                                    <a href="?p=lugarmuestras" class="mm-active">
                                        <i class="fa fa-address-book"></i>
                                        Lugar Muestras
                                    </a>
                                   
                                   
                                   
                                    <a href="?p=unidades" class="mm-active">
                                        <i class="fa fa-address-book"></i>
                                        Unidades
                                    </a>
                                    <a href="?p=procedenciamaterias" class="mm-active">
                                        <i class="fa fa-address-book"></i>
                                        Procedencia MP
                                    </a>
                                </li>

  
                                
<li>
                        <a href="#" aria-expanded="false">
                            <i class="metismenu-icon pe-7s-science"></i>Configuración
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                                    <ul class="mm-collapse" style="">
                                <li>
                                    <a href="#" aria-expanded="false">
                                        <i class="metismenu-icon pe-7s-science"></i>Tipo de elementos
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-collapse" style="">
                                        <li>
                                            <a href="?p=tipomuestras" class="mm-active">
                                                <i class="fa fa-address-book"></i>
                                                Muestras
                                            </a>
                                        </li>
                                        <li>   
                                             <a href="?p=tipomaterias" class="mm-active">
                                                <i class="fa fa-address-book"></i>
                                                Materias Primas
                                            </a>        
                                        </li>
                                        <li>
                                             <a href="?p=tipoproductos" class="mm-active">
                                                <i class="fa fa-address-book"></i>
                                                Productos
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" aria-expanded="false">
                                        <i class="metismenu-icon pe-7s-settings"></i>Acceso
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-collapse" style="">
                                        <li>
                                            <a href="?p=modulo" class="">
                                                <i class="fa fa-book"></i>
                                                Modulos
                                            </a>
                                        </li>
                                        <li>   
                                            <a href="?p=cargo" class="">
                                                <i class="fa fa-briefcase"></i>
                                                Cargos
                                            </a>        
                                        </li>
                                        <li>
                                            <a href="?p=usuario" class="">
                                                <i class="fa fa-address-book"></i>
                                                Usuarios
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                              </ul>  
</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>   
             <div class="app-main__outer">
              <?php 
              $pagina =isset($_GET['p'])? strtolower($_GET['p']):'principal';

              require ($pagina.'.php');
              ?>
             </div>
        </div>
    </div>




<?php 
require('../templates/parts/footer.php');
?>

