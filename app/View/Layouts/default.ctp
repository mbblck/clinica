<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <title>Sistema de gerenciamento para clinicas</title>
    
    <link href="css/c3.min.css" rel="stylesheet">
    <link href="css/chartist.min.css" rel="stylesheet">
    <link href="css/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
   
    <link href="css/style.min.css" rel="stylesheet">

    <style>
    footer.footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        padding: 10px 0;
        background-color: #f8f8f8; /* Cor de fundo do footer */
    }
</style>


    <style>
    #conteudo {
        margin-top: 100px; 
        margin-left: auto; 
        margin-right: auto; 
        width: 80%; 
        max-width: 800px; 
        text-align: center; 
        position: relative; 
    }
</style>
    
</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
   
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                   
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    
                    <div class="navbar-brand">
                        
                        <a href="index.html">
                            <b class="logo-icon">
                                
                                <img src="img/logo-icon.png" alt="homepage" class="dark-logo" />
                                
                                <img src="img/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            
                            <span class="logo-text">
                                
                                <img src="img/logo-text.png" alt="homepage" class="dark-logo" />
                                
                                <img src="img/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                

                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    

                    <ul class="navbar-nav float-right">
                      

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="img/profile-pic.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Olá,</span> <span
                                        class="text-dark">Eduarda Batistella</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
       
        <aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="index.html" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i><span class="hide-menu">Menu</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                <li class="sidebar-item"> 
                    <button class="btn btn-success custom-btn" onclick="listarPacientes()">Pacientes</button>
                </li>
                <li class="sidebar-item">  
                    <button class="btn btn-success custom-btn" onclick="listarMedicos()">Medicos</button>
                </li>
                <li class="sidebar-item"> 
                    <button class="btn btn-success custom-btn" onclick="listarConsultas()">Consultas</button>
                </li>
            </ul>
        </nav>
    </div>
    
</aside>

<style>
    .custom-btn {
        display: block;
        width: 80%; 
        margin: 0 auto 10px; 
    }
</style>

       
        <?php echo $this->fetch('content'); ?>

                
        <footer class="footer text-center text-muted">
            Developed by Eduarda Batistella.
        </footer>
    </div>
    </div>
   
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="js/feather.min.js"></script>
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/d3.min.js"></script>
    <script src="js/c3.min.js"></script>
    <script src="js/chartist.min.js"></script>
    <script src="js/chartist-plugin-tooltip.min.js"></script>
    <script src="js/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/dashboard1.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        function toggleSidebar() {
            document.querySelector('.left-sidebar').classList.toggle('show-sidebar');
        }
    </script>
</body>

</html>
