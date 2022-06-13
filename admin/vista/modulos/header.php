<!-- Header-->
<header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./">< alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">                 
 
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../files/usuarios/<?php echo $_SESSION['imagen'];?>" alt="ImagenUsuario">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <span class="hidden-xs"><?php echo $_SESSION['nombres'];?></span>

                            <!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> -->

                            <a class="nav-link" href="../ajax/usuario.php?op=salir"><i class="fa fa-power -off"></i>Salir</a>
                        </div>
                    </div>
                    <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Left Panel -->
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="home"><i class="menu-icon fa fa-laptop"></i>Escritorio</a>
                    </li>
                    <?php
                    if($_SESSION['Usuario']==1)
                    {
                        echo '
                        <li class="menu-title">Usuario</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Clientes</a>
                        <ul class="sub-menu children dropdown-menu"><li><i class="fa fa-money"></i><a href="wallet">Registro Wallet</a></li>
                          
                        </ul>
                    </li>
                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Inversión</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa  fa-money"></i><a href="planes">Planes de Inversión</a></li>
                            <li><i class="menu-icon fa fa-table"></i><a href="interes">Registro de Intereses</a></li>
                        </ul>
                    </li> -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Inversión</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class=" fa fa-money"></i><a href="planes">Planes de Inversión</a></li>
                            <li><i class=" fa fa-table"></i><a href="interes">Registro de Intereses</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bank"></i>Depositar</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="planes">Nuevo Depósito</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="interes">Reinversión</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Transacción</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="interes">Retiros</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="planes">Depositos</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="usuario"> <i class="menu-icon fa fa-tasks"></i>Actividades</a>
                        <!-- <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul> -->
                    </li>
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="perfil-usuario"> <i class="menu-icon fa fa-image"></i>Perfil</a>
                        <!-- <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul> -->
                    </li>

                        ';

                    }
                    
                    ?>

                    <?php
                    if ($_SESSION['Empresa']==1) {
                        # code...

                        echo '
                        <li class="menu-title">Empresa</li><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="usuario"> <i class="menu-icon fa fa-tasks"></i>Actividades</a>
                            <!-- <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                                <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                            </ul> -->
                        </li>
                        
                       
    
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Transacción</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="interes">Retiros</a></li>
                                <li><i class="menu-icon fa fa-street-view"></i><a href="planes">Depositos</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="recarga"> <i class="menu-icon fa fa-money"></i>Recarga</a>
                            <!-- <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                                <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                            </ul> -->
                        </li>
                        ';

                    }
                    ?>

                    <?php
                    if ($_SESSION['Administrador']==1) {
                        # code...
                        echo'
                        <li class="menu-title">Administrador</li><!-- /.menu-title -->
                   
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-group"></i>Roles</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-user"></i><a href="roles">Nuevo Rol</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Clientes</a>
                            <ul class="sub-menu children dropdown-menu"><li><i class="fa fa-money"></i><a href="wallet">Registro Wallet</a></li>
                              
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Inversión</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa  fa-money"></i><a href="planes">Planes de Inversión</a></li>
                                <li><i class="fa fa-table"></i><a href="interes">Registro de Intereses</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bank"></i>Depositar</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-th"></i><a href="planes">Nuevo Depósito</a></li>
                                <li><i class="menu-icon fa fa-th"></i><a href="interes">Reinversión</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Transacción</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="interes">Retiros</a></li>
                                <li><i class="menu-icon fa fa-street-view"></i><a href="planes">Depositos</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="usuario"> <i class="menu-icon fa fa-tasks"></i>Actividades</a>
                            <!-- <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                                <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                            </ul> -->
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="recarga"> <i class="menu-icon fa fa-money"></i>Recarga</a>
                            <!-- <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                                <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                            </ul> -->
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="perfil-usuario"> <i class="menu-icon fa fa-user"></i>Perfil</a>
                            <!-- <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                                <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                            </ul> -->
                        </li>
                        ';
                    }
                    ?>
                    

                   
                   
                    <li class="menu-title">Soporte</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-cog"></i>Config</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="../ajax/usuario.php?op=salir">Salir</a></li>
                           
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->