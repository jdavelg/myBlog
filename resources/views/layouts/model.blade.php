<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="vIhSlUAZR7gF8zdqffcVJqM2DWfo1BZ5a9ImZNH5">
    <title>Administracion -BLOG</title>
        <link rel="stylesheet" href="http://proyectoartisan.com.devel/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://proyectoartisan.com.devel/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">

    
    
    <link rel="stylesheet" href="http://proyectoartisan.com.devel/vendor/adminlte/dist/css/adminlte.min.css">

            
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    	    
    </head>
<body class="sidebar-mini" >

    <div class="wrapper">

        
                    <nav class="main-header navbar
    navbar-expand-md
    navbar-white navbar-light">

    
    <ul class="navbar-nav">
        
        <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"
                        >
        <i class="fas fa-bars"></i>
        <span class="sr-only">Toggle navigation</span>
    </a>
</li>
        
        <form action="#" method="get" class="form-inline ml-2 mr-2">
        <div class="input-group">
            <input class="form-control form-control-navbar" type="search" name="q" placeholder="search" aria-label="search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

        
            </ul>

    
    <ul class="navbar-nav ml-auto">
        
        
        
        
        
        
        
            </ul>

</nav>
        
        
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">

    
            <a href="http://proyectoartisan.com.devel/home"
            class="brand-link "
    >

    
    <img src="http://proyectoartisan.com.devel/vendor/adminlte/dist/img/AdminLTELogo.png"
         alt="AdminLTE"
         class="brand-image img-circle elevation-3"
         style="opacity:.8">

    
    <span class="brand-text font-weight-light ">
        <b>Admin</b>BLOG
    </span>

</a>
    
    
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column "
                data-widget="treeview" role="menu"
                                >
                
                <li  class="nav-item ">
            <a class="nav-link  " href="http://proyectoartisan.com.devel/admin/pages"
                              
            >
                <i class="far fa-fw fa-file "></i>
                <p>
                    Pages

                                                                <span class="badge badge-warning right">5</span>
                                    </p>
            </a>
                    </li>
    <li  class="nav-header">Ajustes</li>
    <li  class="nav-item ">
            <a class="nav-link  " href="http://proyectoartisan.com.devel/admin/settings"
                              
            >
                <i class="fas fa-fw fa-user "></i>
                <p>
                    Perfil

                                                        </p>
            </a>
                    </li>
    <li  class="nav-item has-treeview">
            <a class="nav-link nav-item " href="#"
                              
            >
                <i class="fas fa-users "></i>
                <p>
                    usuarios

                                            <i class="fas fa-angle-left right"></i>
                                                        </p>
            </a>
                            <ul class="nav nav-treeview">
                    <li  class="nav-item ">
            <a class="nav-link  " href="{{action('AdminUsersController@index')}}"
                              
            >
                <i class="far fa-list-alt"></i>
                <p>
                    ver lista de usuarios

                                                        </p>
            </a>
                    </li>
    <li  class="nav-item ">
            <a class="nav-link  " href="{{action('AdminUsersController@create')}}"
                              
            >
                <i class="fas fa-pencil-alt "></i>
                <p>
                    Crear Nuevo usuario

                                                        </p>
            </a>
                    </li>
    
                    </ul>
                    </li>
    <li  class="nav-item has-treeview">
            <a class="nav-link nav-item " href="#"
                              
            >
                <i class="far fa-edit "></i>
                <p>
                    publicaciones

                                            <i class="fas fa-angle-left right"></i>
                                                        </p>
            </a>
                            <ul class="nav nav-treeview">
                    <li  class="nav-item ">
            <a class="nav-link  " href="{{action('AdminPostsController@index')}}"
                              
            >
                <i class="fas fa-scroll "></i>
                <p>
                    ver lista de publicaciones

                                                        </p>
            </a>
                    </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li  class="nav-item ">
                <a class="nav-link  " href="{{action('AdminPostsController@create')}}"
                                  
                >
                    <i class="fas fa-pencil-alt"></i>
                    <p>
                        Crear Publicacion Nueva
    
                                                            </p>
                </a>
                        </li>
                        </ul>

                    </li>
    <li  class="nav-item has-treeview">
            <a class="nav-link nav-item " href="#"
                              
            >
                <i class="fas fa-atlas "></i>
                <p>
                    categorias

                                            <i class="fas fa-angle-left right"></i>
                                                        </p>
            </a>
                            <ul class="nav nav-treeview">
                    <li  class="nav-item ">
            <a class="nav-link  " href="#"
                              
            >
                <i class="far fa-fw fa-circle "></i>
                <p>
                    ver lista de publicaciones

                                                        </p>
            </a>
                    </li>
                    </ul>
                    </li>
    <li  class="nav-header">LABELS</li>
    <li  class="nav-item ">
            <a class="nav-link  " href="#"
                              
            >
                <i class="far fa-fw fa-circle text-red"></i>
                <p>
                    Important

                                                        </p>
            </a>
                    </li>
    <li  class="nav-item ">
            <a class="nav-link  " href="#"
                              
            >
                <i class="far fa-fw fa-circle text-yellow"></i>
                <p>
                    Warning

                                                        </p>
            </a>
                    </li>
    <li  class="nav-item ">
            <a class="nav-link  " href="#"
                              
            >
                <i class="far fa-fw fa-circle text-cyan"></i>
                <p>
                    Information

                                                        </p>
            </a>
                    </li>
                </ul>
        </nav>
    </div>

</aside>
        
        
        <div class="content-wrapper">

            

            
            <div class="content">
                <div class="container-fluid">
                    
                        
                    @section('content')
                        
                    @show
                                    </div>
            </div>

        </div>

        
        
        
        
    </div>

<script src="http://proyectoartisan.com.devel/vendor/jquery/jquery.min.js"></script>
<script src="http://proyectoartisan.com.devel/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://proyectoartisan.com.devel/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>


    <script src="http://proyectoartisan.com.devel/vendor/adminlte/dist/js/adminlte.min.js"></script>
        </body>
</html>
