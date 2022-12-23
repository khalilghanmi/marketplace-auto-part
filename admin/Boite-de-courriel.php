<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Mailbox | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="shortcut icon" type="image/png" href="../src/assets/img/favicon.ico" />
    <link href="../layouts/semi-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/semi-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../layouts/semi-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/semi-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/semi-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/plugins/src/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/src/sweetalerts2/sweetalerts2.css" rel="stylesheet" type="text/css" />

    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/editors/quill/quill.snow.css">
    <link href="../src/assets/css/light/apps/mailbox.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />

    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/editors/quill/quill.snow.css">
    <link href="../src/assets/css/dark/apps/mailbox.css" rel="stylesheet" type="text/css" />
    <link href="../src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="layout-boxed ">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header">

            <a href="javascript:void(0);" class="sidebarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>

            <div class="search-animated toggle-search">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x search-close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </div>
                </form>
                <span class="badge badge-secondary">Ctrl + /</span>
            </div>

            <ul class="navbar-item flex-row ms-lg-auto ms-0">

                <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../src/assets/img/1x1/us.svg" class="flag-width" alt="flag">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/us.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/tr.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Turkish</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/br.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Portuguese</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/in.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Hindi</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="../src/assets/img/1x1/de.svg" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                    </div>
                </li>

                <li class="nav-item theme-toggle-item">
                    <a href="javascript:void(0);" class="nav-link theme-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    </a>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="drodpown-title message">
                            <h6 class="d-flex justify-content-between"><span class="align-self-center">Messages</span> <span class="badge badge-primary">9 Unread</span></h6>
                        </div>
                        <div class="notification-scroll">
                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <img src="../src/assets/img/profile-16.jpeg" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kara Young</h6>
                                            <p class="">1 hr ago</p>
                                        </div>
                                        
                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dropdown-item">
                                <div class="media ">
                                    <img src="../src/assets/img/profile-15.jpeg" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Daisy Anderson</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <img src="../src/assets/img/profile-21.jpeg" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Oscar Garner</h6>
                                            <p class="">14 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="drodpown-title notification mt-2">
                                <h6 class="d-flex justify-content-between"><span class="align-self-center">Notifications</span> <span class="badge badge-secondary">16 New</span></h6>
                            </div>

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-container">
                            <div class="avatar avatar-sm avatar-indicators avatar-online">
                                <img alt="avatar" src="../src/assets/img/profile-30.png" class="rounded-circle">
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="emoji me-2">
                                    &#x1F44B;
                                </div>
                                <div class="media-body">
                                    <h5>Shaun Park</h5>
                                    <p>Project Leader</p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="user-profile.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="app-mailbox.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth-boxed-lockscreen.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth-boxed-signin.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="./index.php">
                                <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="./index.php" class="nav-link"> CORK </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        </div>
                    </div>
                </div>
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./index.php"> Analytics </a>
                            </li>
                            <li>
                                <a href="./index2.php"> Sales </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
                    </li>

                    <li class="menu">
                        <a href="./app-calendar.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Calendar</span>
                            </div>
                        </a>
                    </li>
                    
                    <li class="menu">
                        <a href="./app-chat.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                <span>Chat</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu active">
                        <a href="./app-mailbox.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span>Mailbox</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./app-todoList.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                <span>Todo List</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./app-notes.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <span>Notes</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./app-scrumboard.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                                <span>Scrumboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./app-contacts.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span>Contacts</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#invoice" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                <span>Invoice</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="invoice" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-invoice-list.php"> List </a>
                            </li>
                            <li>
                                <a href="./app-invoice-preview.php"> Preview </a>
                            </li>
                            <li>
                                <a href="./app-invoice-add.php"> Add </a>
                            </li>
                            <li>
                                <a href="./app-invoice-edit.php"> Edit </a>
                            </li>                            
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#ecommerce" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                <span>Ecommerce</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-ecommerce-product-shop.php"> Shop </a>
                            </li>
                            <li>
                                <a href="./app-ecommerce-product.php"> Product </a>
                            </li>
                            <li>
                                <a href="./app-ecommerce-product-list.php"> List </a>
                            </li>
                            <li>
                                <a href="./app-ecommerce-product-add.php"> Create </a>
                            </li>                            
                            <li>
                                <a href="./app-ecommerce-product-edit.php"> Edit </a>
                            </li>                            
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#blog" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                                <span>Blog</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="blog" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./app-blog-grid.php"> Grid </a>
                            </li>
                            <li>
                                <a href="./app-blog-list.php"> List </a>
                            </li>
                            <li>
                                <a href="./app-blog-post.php"> Post </a>
                            </li>
                            <li>
                                <a href="./app-blog-create.php"> Create </a>
                            </li>                            
                            <li>
                                <a href="./app-blog-edit.php"> Edit </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>USER INTERFACE</span></div>
                    </li>

                    <li class="menu">
                        <a href="#components" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Components</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./component-tabs.php"> Tabs </a>
                            </li>
                            <li>
                                <a href="./component-accordion.php"> Accordions  </a>
                            </li>
                            <li>
                                <a href="./component-modal.php"> Modals </a>
                            </li>                            
                            <li>
                                <a href="./component-cards.php"> Cards </a>
                            </li>
                            <li>
                                <a href="./component-bootstrap-carousel.php">Carousel</a>
                            </li>
                            <li>
                                <a href="./component-splide.php">Splide</a>
                            </li>
                            <li>
                                <a href="./component-sweetalert.php"> Sweet Alerts </a>
                            </li>
                            <li>
                                <a href="./component-timeline.php"> Timeline </a>
                            </li>
                            <li>
                                <a href="./component-notifications.php"> Notifications </a>
                            </li>
                            <li>
                                <a href="./component-media-object.php"> Media Object </a>
                            </li>
                            <li>
                                <a href="./component-list-group.php"> List Group </a>
                            </li>
                            <li>
                                <a href="./component-pricing-table.php"> Pricing Tables </a>
                            </li>
                            <li>
                                <a href="./component-lightbox.php"> Lightbox </a>
                            </li>
                            <li>
                                <a href="./component-drag-drop.php"> Drag and Drop </a>
                            </li>
                            <li>
                                <a href="./component-fonticons.php"> Font Icons </a>
                            </li>
                            <li>
                                <a href="./component-flags.php"> Flag Icons </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#elements" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                <span>Elements</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./element-alerts.php"> Alerts </a>
                            </li>
                            <li>
                                <a href="./element-avatar.php"> Avatar </a>
                            </li>
                            <li>
                                <a href="./element-badges.php"> Badges </a>
                            </li>
                            <li>
                                <a href="./element-breadcrumbs.php"> Breadcrumbs </a>
                            </li>                            
                            <li>
                                <a href="./element-buttons.php"> Buttons </a>
                            </li>
                            <li>
                                <a href="./element-buttons-group.php"> Button Groups </a>
                            </li>
                            <li>
                                <a href="./element-color-library.php"> Color Library </a>
                            </li>
                            <li>
                                <a href="./element-dropdown.php"> Dropdown </a>
                            </li>
                            <li>
                                <a href="./element-infobox.php"> Infobox </a>
                            </li>
                            <li>
                                <a href="./element-loader.php"> Loader </a>
                            </li>
                            <li>
                                <a href="./element-pagination.php"> Pagination </a>
                            </li>
                            <li>
                                <a href="./element-popovers.php"> Popovers </a>
                            </li>
                            <li>
                                <a href="./element-progressbar.php"> Progress Bar </a>
                            </li>
                            <li>
                                <a href="./element-search.php"> Search </a>
                            </li>
                            <li>
                                <a href="./element-tooltips.php"> Tooltips </a>
                            </li>
                            <li>
                                <a href="./element-treeview.php"> Treeview </a>
                            </li>
                            <li>
                                <a href="./element-typography.php"> Typography </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="./map-leaflet.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                                <span>Maps</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./charts-apex.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                                <span>Charts</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="./widgets.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span>Widgets</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#layouts" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                                <span>Layouts</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="layouts" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./layout-blank-page.php"> Blank Page </a>
                            </li>
                            <li>
                                <a href="./layout-empty.php"> Empty Page </a>
                            </li>
                            <li>
                                <a href="./layout-boxed.php"> Boxed </a>
                            </li>
                            <li>
                                <a href="./layout-collapsible-menu.php"> Collapsed menu  </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>TABLES AND FORMS</span></div>
                    </li>

                    <li class="menu">
                        <a href="./table-basic.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                <span>Tables</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>DataTables</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./table-datatable-basic.php"> Basic </a>
                            </li>
                            <li>
                                <a href="./table-datatable-striped-table.php"> Striped </a>
                            </li>
                            <li>
                                <a href="./table-datatable-custom.php"> Custom </a>
                            </li>
                            <li>
                                <a href="./table-datatable-miscellaneous.php"> Miscellaneous </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <span>Forms</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./form-bootstrap-basic.php"> Basic </a>
                            </li>
                            <li>
                                <a href="./form-input-group-basic.php"> Input Group </a>
                            </li>
                            <li>
                                <a href="./form-layouts.php"> Layouts </a>
                            </li>
                            <li>
                                <a href="./form-validation.php"> Validation </a>
                            </li>
                            <li>
                                <a href="./form-input-mask.php"> Input Mask </a>
                            </li>
                            <li>
                                <a href="./form-tom-select.php"> Tom Select </a>
                            </li>
                            <li>
                                <a href="./form-tagify.php"> Tagify </a>
                            </li>
                            <li>
                                <a href="./form-bootstrap-touchspin.php"> TouchSpin </a>
                            </li>
                            <li>
                                <a href="./form-maxlength.php"> Maxlength </a>
                            </li>                          
                            <li>
                                <a href="./form-checkbox.php"> Checkbox </a>
                            </li>
                            <li>
                                <a href="./form-radio.php"> Radio </a>
                            </li>
                            <li>
                                <a href="./form-switches.php"> Switches </a>
                            </li>
                            <li>
                                <a href="./form-wizard.php"> Wizards </a>
                            </li>
                            <li>
                                <a href="./form-fileupload.php"> File Upload </a>
                            </li>
                            <li>
                                <a href="./form-quill.php"> Quill Editor </a>
                            </li>
                            <li>
                                <a href="./form-markdown.php"> Markdown Editor </a>
                            </li>
                            <li>
                                <a href="./form-date-time-picker.php"> Date Time Picker </a>
                            </li>
                            <li>
                                <a href="./form-slider.php"> Slider </a>
                            </li>
                            <li>
                                <a href="./form-clipboard.php"> Clipboard </a>
                            </li>
                            <li>
                                <a href="./form-autoComplete.php"> Auto Complete </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>USER AND PAGES</span></div>
                    </li>                    

                    <li class="menu">
                        <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Users</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./user-profile.php"> Profile </a>
                            </li>
                            <li>
                                <a href="./user-account-settings.php"> Account Settings </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#pages" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Pages</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./pages-knowledge-base.php"> Knowledge Base </a>
                            </li>
                            <li>
                                <a href="./pages-faq.php"> FAQ </a>
                            </li>
                            <li>
                                <a href="./pages-contact-us.php"> Contact Form </a>
                            </li>
                            <li>
                                <a href="./pages-error404.php" target="_blank"> Error </a>
                            </li>
                            <li>
                                <a href="./pages-maintenence.php" target="_blank"> Maintanence </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#authentication" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <span>Authentication</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="authentication" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./auth-boxed-signin.php" target="_blank"> Sign In </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-signup.php" target="_blank"> Sign Up </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-lockscreen.php" target="_blank"> Unlock </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-password-reset.php" target="_blank"> Reset </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-2-step-verification.php" target="_blank"> 2 Step </a>
                            </li>
                            <li>
                                <a href="./auth-cover-signin.php" target="_blank"> Sign In Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-signup.php" target="_blank"> Sign Up Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-lockscreen.php" target="_blank"> Unlock Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-password-reset.php" target="_blank"> Reset Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-2-step-verification.php" target="_blank"> 2 Step Cover </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>MISCELLANEOUS</span></div>
                    </li>

                    <li class="menu">
                        <a href="#menuLevel1" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                <span>Item Level</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="menuLevel1" data-bs-parent="#accordionExample">
                            <li>
                                <a href="javascript:void(0);"> Item Level 1a </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Item Level 1b </a>
                            </li>

                            <li>
                                <a href="#level-three" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"> Item Level 1c <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="level-three" data-bs-parent="#pages"> 
                                    <li>
                                        <a href="javascript:void(0);"> Item Level 2a </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Item Level 2b </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Item Level 2c </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle disabled">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                <span>Item Disabled</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                <span>Item Label</span>
                                <span class="badge badge-primary sidebar-label"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle badge-icon"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg> New</span>
                            </div>
                        </a>
                    </li>
                    
                    <li class="menu">
                        <a target="_blank" href="../../documentation/index.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                <span>Documentation</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a target="_blank" href="../../documentation/changelog.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash"><line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line><line x1="10" y1="3" x2="8" y2="21"></line><line x1="16" y1="3" x2="14" y2="21"></line></svg>
                                <span>Changelog</span>
                            </div>
                        </a>
                    </li>
                    
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">
                    
                    <div class="row layout-top-spacing">
                        <div class="col-xl-12 col-lg-12 col-md-12">
    
                            <div class="row">
    
                                <div class="col-xl-12  col-md-12">
    
                                    <div class="mail-box-container">

                                        <div class="mail-overlay"></div>

                                        <div class="tab-title">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-12 text-center mail-btn-container">
                                                    <a id="btn-compose-mail" class="btn btn-block" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-12 mail-categories-container">
    
                                                    <div class="mail-sidebar-scroll">
    
                                                        <ul class="nav nav-pills d-block" id="pills-tab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link list-actions active" id="mailInbox"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span class="nav-names">Inbox</span> <span class="mail-badge badge"></span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link list-actions" id="important"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <span class="nav-names">Important</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link list-actions" id="draft"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> <span class="nav-names">Draft</span> <span class="mail-badge badge"></span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link list-actions" id="sentmail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg> <span class="nav-names"> Sent Mail</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link list-actions" id="spam"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> <span class="nav-names">Spam</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link list-actions" id="trashed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="nav-names">Trash</span></a>
                                                            </li>
                                                        </ul>
    
                                                        <p class="group-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg> Groups</p>
    
                                                        <ul class="nav nav-pills d-block group-list" id="pills-tab2" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link list-actions active g-dot-primary" id="personal"><span>Personal</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link list-actions g-dot-warning" id="work"><span>Work</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link list-actions g-dot-success" id="social"><span>Social</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link list-actions g-dot-danger" id="private"><span>Private</span></a>
                                                            </li>
                                                        </ul>
    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="mailbox-inbox" class="accordion mailbox-inbox">
    
                                            <div class="search">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                                <input type="text" class="form-control input-search" placeholder="Search Here...">
                                            </div>
    
                                            <div class="action-center">
                                                <div class="">
                                                    <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                        <input class="form-check-input inbox-chkbox" type="checkbox" id="inboxAll">
                                                    </div>
                                                </div>
    
                                                <div class="">
                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-toggle="tooltip" data-placement="top" data-original-title="Label" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
                                                    <div class="dropdown-menu left d-icon-menu">
                                                        <a class="label-group-item label-personal dropdown-item position-relative g-dot-primary" href="javascript:void(0);"> Personal</a>
                                                        <a class="label-group-item label-work dropdown-item position-relative g-dot-warning" href="javascript:void(0);"> Work</a>
                                                        <a class="label-group-item label-social dropdown-item position-relative g-dot-success" href="javascript:void(0);"> Social</a>
                                                        <a class="label-group-item label-private dropdown-item position-relative g-dot-danger" href="javascript:void(0);"> Private</a>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-toggle="tooltip" data-placement="top" data-original-title="Important" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star action-important"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" data-original-title="Spam" class="feather feather-alert-circle action-spam"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" data-toggle="tooltip" data-placement="top" data-original-title="Revive Mail" stroke-linejoin="round" class="feather feather-activity revive-mail"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" data-original-title="Delete Permanently" class="feather feather-trash permanent-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <div class="dropdown d-inline-block more-actions">
                                                        <a class="nav-link dropdown-toggle" id="more-actions-btns-dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </a>
                                                        <div class="dropdown-menu left" aria-labelledby="more-actions-btns-dropdown">
                                                            <a class="dropdown-item action-mark_as_read" href="javascript:void(0);">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg> Mark as Read
                                                            </a>
                                                            <a class="dropdown-item action-mark_as_unRead" href="javascript:void(0);">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> Mark as Unread
                                                            </a>
                                                            <a class="dropdown-item action-delete" href="javascript:void(0);">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-toggle="tooltip" data-placement="top" data-original-title="Delete" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Trash
                                                            </a>
                                                        </div>
                                                    </div>
    
                                                </div>
                                            </div>
                                    
                                            <div class="message-box">
                                                
                                                <div class="message-box-scroll" id="ct">
    
                                                    <div class="mail-item draft">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingOne">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading personal collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseOne" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input new-control" type="checkbox" id="form-check-default1">
                                                                            </div>
                                                                            <div class="f-body" data-mailfrom="info@mail.com" data-mailto="kf@mail.com" data-mailcc="">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="kf@mail.com">Keith Foster</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Web Design News">Draft: Web Design News - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">9:30 PM</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item sentmail">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingTwo">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading work collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseTwo" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default2">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="alan@mail.com">Alan</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Mozilla Update">Mozilla Update - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">8:45 AM</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      
                                                    <div id="unread-promotion-page" class="mail-item mailInbox">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingThree">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading social collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseThree" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default3">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-16.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="laurieFox@mail.com">Laurie Fox</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip attachment-indicator"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg><span class="mail-title" data-mailTitle="Promotion Page">Promotion Page - </span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.
                                                                                    </p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">2:00 PM</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="attachments">
                                                                        <span class="">Confirm File.txt</span>
                                                                        <span class="">Important Docs.xml</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item draft">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingFour">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading private collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseFour" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default4">
                                                                            </div>
                                                                            <div class="f-body" data-mailfrom="info@mail.com" data-mailto="amDiaz@mail.com" data-mailcc="">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="amDiaz@mail.com">Amy Diaz</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Ecommerce Analytics">Draft: Ecommerce Analytics - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">2:00 PM</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item mailInbox">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingFive">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseFive" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default5">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-19.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="kingAndy@mail.com">Andy King</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Hosting Payment Reminder">Hosting Payment Reminder -</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">6:28 PM</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div id="unread-verification-link" class="mail-item mailInbox">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingEleven">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading social collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseEleven" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default6">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <div class="avatar avatar-sm">
                                                                                    <span class="avatar-title rounded-circle">KB</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="kirsten.beck@mail.com">Kristen Beck</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Verification Link">Verification Link - </span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">8 Feb</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item mailInbox">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingTwelve">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading private collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseTwelve" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default7">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-34.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="christian@mail.com">Christian</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip attachment-indicator"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg><span class="mail-title" data-mailTitle="New Updates">New Updates - </span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">29 Jan</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="attachments">
                                                                        <span class="">update.zip</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div id="unread-schedular-alert" class="mail-item mailInbox">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingThirteen">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading personal collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseThirteen" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default8">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-31.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="roxanne@mail.com">Roxanne</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Schedular Alert">Schedular Alert - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">15 Jan</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                                
    
                                                    <div class="mail-item sentmail">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingSix">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseSix" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default9">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="justincross@mail.com">Justin Cross</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="App Project Checklist">App Project Checklist - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">3:10 PM</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item mailInbox important">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingSeven">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseSeven" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default10">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-17.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="niahillyer@mail.com">Nia Hillyer</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Motion UI Kit">Motion UI Kit - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">10 Jan</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item mailInbox important">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingEight">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseEight" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default11">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-23.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="irishubbard@mail.com">Iris Hubbard</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Green Illustration">Green Illustration - </span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">01 Jan</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item spam">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingNine">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseNine" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default12">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-18.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="alexGray@mail.com">Alex Gray</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Weekly Newsletter">Weekly Newsletter - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">10:18 AM</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item trashed">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingTen">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseTen" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default13">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-13.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="ryanMCkillop@mail.com">Ryan MC Killop</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Make it Simple">Make it Simple - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">11:45 PM</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item mailInbox important">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingFourteen">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading work collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseFourteen" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default14">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <div class="avatar avatar-sm">
                                                                                    <span class="avatar-title rounded-circle">E</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="f-body">    
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="reevesErnest@mail.com">Ernest Reeves</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Just uploaded new video Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Youtube">Youtube - </span>Just uploaded new video Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">25 Dec</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item mailInbox spam">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingFifteen">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading work collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseFifteen" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default15">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-15.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="infocompany@mail.com">Info Company</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="50% Discount">50% Discount - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">15 Dec</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div id="unread-verification-link-new" class="mail-item mailInbox">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingSixteen">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading personal collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseSixteen" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default16">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <div class="avatar avatar-sm">
                                                                                    <span class="avatar-title rounded-circle">NI</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="npminc@mail.com">NPM Inc</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip attachment-indicator"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg><span class="mail-title" data-mailTitle="npm Inc">npm Inc - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">01 Dec</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="attachments">
                                                                        <span class="">package.zip</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item mailInbox spam">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingSeventeen">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading personal collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseSeventeen" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default17">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-18.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="marleneWood@mail.com">Marlene Wood</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="eBill">eBill - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">29 Nov</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mail-item mailInbox spam">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingNineteen">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading personal collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseNineteen" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default18">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-19.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="ashtonCox@mail.com">Ashton Cox</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Renew : Cork Licence">Renew : Cork Licence - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">29 Nov</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mail-item mailInbox spam">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingTwenty">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading personal collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseTwenty" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default19">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-32.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="bradleyGreer@mail.com">Bradley Greer</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Verficication Link">Verficication Link - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">25 Nov</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mail-item trashed">
                                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingEighteen">
                                                            <div class="mb-0">
                                                                <div class="mail-item-heading collapsed"  data-bs-toggle="collapse" role="navigation" data-bs-target="#mailCollapseEighteen" aria-expanded="false">
                                                                    <div class="mail-item-inner">
    
                                                                        <div class="d-flex">
                                                                            <div class="form-check form-check-primary form-check-inline mt-1" data-bs-toggle="collapse" data-bs-target>
                                                                                <input class="form-check-input inbox-chkbox" type="checkbox" id="form-check-default20">
                                                                            </div>
                                                                            <div class="f-head">
                                                                                <img src="../src/assets/img/profile-23.jpeg" class="user-profile" alt="avatar">
                                                                            </div>
                                                                            <div class="f-body">
                                                                                <div class="meta-mail-time">
                                                                                    <p class="user-email" data-mailTo="liamSheldon@mail.com">Liam Sheldon</p>
                                                                                </div>
                                                                                <div class="meta-title-tag">
                                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="New Offers">New Offers - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                                    <div class="tags">
                                                                                        <span class="g-dot-primary"></span>
                                                                                        <span class="g-dot-warning"></span>
                                                                                        <span class="g-dot-success"></span>
                                                                                        <span class="g-dot-danger"></span>
                                                                                    </div>
                                                                                    <p class="meta-time align-self-center">11:45 PM</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                </div>
                                            </div>
    
                                            <div class="content-box">
                                                <div class="d-flex msg-close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left close-message"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                                                    <h2 class="mail-title" data-selectedMailTitle=""></h2>
                                                </div>
    
                                                <div id="mailCollapseTwo" class="collapse" aria-labelledby="mailHeadingTwo" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container sentmail" data-mailfrom="info@mail.com" data-mailto="alan@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-3">
                                                            <div class="d-flex user-info">
                                                                <div class="f-body">
                                                                    <div class="meta-mail-time">
                                                                        <div class="">
                                                                            <p class="user-email" data-mailto="alan@mail.com"><span>To,</span> alan@mail.com</p>
                                                                        </div>
                                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2022 -</p>
                                                                        <p class="meta-time align-self-center">8:45 AM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <p class="mail-content" data-mailTitle="Mozilla Update" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Shaun Park</p>
    
                                                        <div class="attachments">
                                                            <h6 class="attachments-section-title">Attachments</h6>
                                                            <div class="attachment file-pdf">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Confirm File</p>
                                                                        <p class="file-size">450kb</p>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="attachment file-folder">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Important Docs</p>
                                                                        <p class="file-size">2.1MB</p>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="attachment file-img">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Photo.png</p>
                                                                        <p class="file-size">50kb</p>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseThree" class="collapse" aria-labelledby="mailHeadingThree" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="linda@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between">
    
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-16.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Promotion Page">Laurie Fox</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="laurieFox@mail.com">laurieFox@mail.com</p>
                                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2022 -</p>
                                                                        <p class="meta-time align-self-center">2:00 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="Promotion Page" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <div class="gallery text-center">
                                                            <img alt="image-gallery" src="../src/assets/img/scroll-6.jpeg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                                            <img alt="image-gallery" src="../src/assets/img/scroll-7.jpeg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                                            <img alt="image-gallery" src="../src/assets/img/scroll-8.jpeg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                                        </div>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Laurie Fox</p>
    
    
                                                        <div class="attachments">
                                                            <h6 class="attachments-section-title">Attachments</h6>
                                                            <div class="attachment file-pdf">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Confirm File.txt</p>
                                                                        <p class="file-size">450kb</p>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="attachment file-folder">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Important Docs.xml</p>
                                                                        <p class="file-size">2.1MB</p>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                        </div>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseFive" class="collapse" aria-labelledby="mailHeadingFive" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="kingAndy@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-19.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Hosting Payment Reminder">Andy King</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="kingAndy@mail.com">kingAndy@mail.com</p>
                                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2022 -</p>
                                                                        <p class="meta-time align-self-center">6:28 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="Hosting Payment Reminder" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Andy King</p>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseEleven" class="collapse" aria-labelledby="mailHeadingEleven" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="kirsten.beck@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <div class="avatar avatar-sm">
                                                                        <span class="avatar-title rounded-circle">KB</span>
                                                                    </div>
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Verification Link">Kirsten Beck</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="kirsten.beck@mail.com">kirsten.beck@mail.com</p>
                                                                        <p class="mail-content-meta-date">12/08/2022 -</p>
                                                                        <p class="meta-time align-self-center">11:09 AM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="Verification Link" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Kirsten Beck</p>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseTwelve" class="collapse" aria-labelledby="mailHeadingTwelve" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="christian@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-34.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="New Updates">Christian</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="christian@mail.com">christian@mail.com</p>
                                                                        <p class="mail-content-meta-date">11/30/2022 -</p>
                                                                        <p class="meta-time align-self-center">2:00 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="New Updates" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Christian</p>
    
    
                                                        <div class="attachments">
                                                            <h6 class="attachments-section-title">Attachments</h6>
                                                            <div class="attachment file-pdf">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">update.zip</p>
                                                                        <p class="file-size">1.3MB</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseThirteen" class="collapse" aria-labelledby="mailHeadingThirteen" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="roxanne@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-31.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Schedular Alert">Roxanne</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="roxanne@mail.com">roxanne@mail.com</p>
                                                                        <p class="mail-content-meta-date">11/15/2022 -</p>
                                                                        <p class="meta-time align-self-center">2:00 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="Schedular Alert" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Roxanne</p>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseFourteen" class="collapse" aria-labelledby="mailHeadingFourteen" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="reevesErnest@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <div class="avatar avatar-sm">
                                                                        <span class="avatar-title rounded-circle">E</span>
                                                                    </div>
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Youtube">Youtube</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="reevesErnest@mail.com">reevesErnest@mail.com</p>
                                                                        <p class="mail-content-meta-date">06/02/2022 -</p>
                                                                        <p class="meta-time align-self-center">8:25 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="Youtube" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Ernest Reeves</p>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseFifteen" class="collapse" aria-labelledby="mailHeadingFifteen" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="infocompany@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-15.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="50% Discount">Info Company</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="infocompany@mail.com">infocompany@mail.com</p>
                                                                        <p class="mail-content-meta-date">02/10/2022 -</p>
                                                                        <p class="meta-time align-self-center">7:00 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="50% Discount" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Info Company</p>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseSixteen" class="collapse" aria-labelledby="mailHeadingSixteen" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="npminc@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <div class="avatar avatar-sm">
                                                                        <span class="avatar-title rounded-circle">NI</span>
                                                                    </div>
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="npm Inc">npm Inc</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="npminc@mail.com">npminc@mail.com</p>
                                                                        <p class="mail-content-meta-date">12/15/2021 -</p>
                                                                        <p class="meta-time align-self-center">8:37 AM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="npm Inc" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Info Company</p>
    
    
                                                        <div class="attachments">
                                                            <h6 class="attachments-section-title">Attachments</h6>
                                                            <div class="attachment file-pdf">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">package.zip</p>
                                                                        <p class="file-size">450kb</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseSeventeen" class="collapse" aria-labelledby="mailHeadingSeventeen" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="infocompany@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-18.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="eBill">eBill</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="infocompany@mail.com">infocompany@mail.com</p>
                                                                        <p class="mail-content-meta-date">11/25/2021 -</p>
                                                                        <p class="meta-time align-self-center">1:51 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="eBill" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Info Company</p>
                                                    </div>
                                                </div>

                                                <div id="mailCollapseNineteen" class="collapse" aria-labelledby="mailHeadingNineteen" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="infocompany@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-19.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Renew : Cork Licence">Renew : Cork Licence</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="infocompany@mail.com">infocompany@mail.com</p>
                                                                        <p class="mail-content-meta-date">11/25/2021 -</p>
                                                                        <p class="meta-time align-self-center">1:51 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="Renew : Cork Licence" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Info Company</p>
                                                    </div>
                                                </div>

                                                <div id="mailCollapseTwenty" class="collapse" aria-labelledby="mailHeadingTwenty" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="infocompany@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-32.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Verification Link">Verification Link</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="infocompany@mail.com">infocompany@mail.com</p>
                                                                        <p class="mail-content-meta-date">11/25/2021 -</p>
                                                                        <p class="meta-time align-self-center">1:51 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="Verification Link" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Info Company</p>
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseEighteen" class="collapse" aria-labelledby="mailHeadingEighteen" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="infocompany@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-28.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="">Info Company</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="infocompany@mail.com">infocompany@mail.com</p>
                                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2022 -</p>
                                                                        <p class="meta-time align-self-center">11:45 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="New Offers" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Info Company</p>
    
    
                                                        <div class="attachments">
                                                            <h6 class="attachments-section-title">Attachments</h6>
                                                            <div class="attachment file-pdf">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Confirm File</p>
                                                                        <p class="file-size">450kb</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseSix" class="collapse" aria-labelledby="mailHeadingSix" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container sentmail" data-mailfrom="info@mail.com" data-mailto="justincross@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-3">
                                                            <div class="d-flex user-info">
                                                                <div class="f-body">
                                                                    <div class="meta-mail-time">
                                                                        <div class="">
                                                                            <p class="user-email" data-mailto="justincross@mail.com"><span>To,</span> justincross@mail.com </p>
                                                                        </div>
                                                                        <p class="mail-content-meta-date">12/14/219 -</p>
                                                                        <p class="meta-time align-self-center">3:10 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="App Project Checklist" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Shaun Park</p>
    
                                                        <div class="attachments">
                                                            <h6 class="attachments-section-title">Attachments</h6>
                                                            <div class="attachment file-folder">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Important Docs</p>
                                                                        <p class="file-size">2.1MB</p>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="attachment file-img">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Photo.png</p>
                                                                        <p class="file-size">50kb</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseSeven" class="collapse" aria-labelledby="mailHeadingSeven" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container important" data-mailfrom="info@mail.com" data-mailto="niahillyer@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-17.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Motion UI Kit">Nia Hillyer</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="niahillyer@mail.com">niahillyer@mail.com</p>
                                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2022 -</p>
                                                                        <p class="meta-time align-self-center">2:22 AM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="op" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="Motion UI Kit" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
    
                                                        <div class="gallery text-center">
                                                            <img alt="image-gallery" src="../src/assets/img/scroll-6.jpeg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                                            <img alt="image-gallery" src="../src/assets/img/scroll-7.jpeg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                                            <img alt="image-gallery" src="../src/assets/img/scroll-8.jpeg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                                        </div>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Nia Hillyer</p>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseEight" class="collapse" aria-labelledby="mailHeadingEight" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container important" data-mailfrom="info@mail.com" data-mailto="irishubbard@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-23.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Green Illustration">Iris Hubbard</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="irishubbard@mail.com">irishubbard@mail.com</p>
                                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2022 -</p>
                                                                        <p class="meta-time align-self-center">1:40 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="Green Illustration" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Iris Hubbard</p>
    
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseNine" class="collapse" aria-labelledby="mailHeadingNine" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container spam" data-mailfrom="info@mail.com" data-mailto="alexGray@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-18.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Weekly Newsletter">Alex Gray</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="alexGray@mail.com">alexGray@mail.com</p>
                                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2022 -</p>
                                                                        <p class="meta-time align-self-center">10:18 AM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
    
                                                        <p class="mail-content" data-mailTitle="Weekly Newsletter" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. </p>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Alexander Gray</p>
    
                                                        <div class="attachments">
                                                            <h6 class="attachments-section-title">Attachments</h6>
                                                            <div class="attachment file-pdf">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Confirm File</p>
                                                                        <p class="file-size">450kb</p>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="attachment file-folder">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Important Docs</p>
                                                                        <p class="file-size">2.1MB</p>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="attachment file-img">
                                                                <div class="media">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                                    <div class="media-body">
                                                                        <p class="file-name">Photo.png</p>
                                                                        <p class="file-size">50kb</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div id="mailCollapseTen" class="collapse" aria-labelledby="mailHeadingTen" data-bs-parent="#mailbox-inbox">
                                                    <div class="mail-content-container trashed" data-mailfrom="info@mail.com" data-mailto="ryanMCkillop@mail.com" data-mailcc="">
    
                                                        <div class="d-flex justify-content-between mb-5">
                                                            <div class="d-flex user-info">
                                                                <div class="f-head">
                                                                    <img src="../src/assets/img/profile-13.jpeg" class="user-profile" alt="avatar">
                                                                </div>
                                                                <div class="f-body">
                                                                    <div class="meta-title-tag">
                                                                        <h4 class="mail-usr-name" data-mailtitle="Make it Simple">Ryan MC Killop</h4>
                                                                    </div>
                                                                    <div class="meta-mail-time">
                                                                        <p class="user-email" data-mailto="ryanMCkillop@mail.com">ryanMCkillop@mail.com</p>
                                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2022 -</p>
                                                                        <p class="meta-time align-self-center">11:45 PM</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="action-btns">
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <p class="mail-content" data-mailTitle="Make it Simple" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
    
                                                        <div class="gallery text-center">
                                                            <img alt="image-gallery" src="../src/assets/img/scroll-6.jpeg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                                            <img alt="image-gallery" src="../src/assets/img/scroll-7.jpeg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                                            <img alt="image-gallery" src="../src/assets/img/scroll-8.jpeg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                                        </div>
    
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
    
                                                        <p>Best Regards,</p>
                                                        <p>Ryan McKillop</p>
    
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
                                        
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="composeMailModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title add-title" id="notesMailModalTitleeLabel">Compose</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> -->
                                                    <div class="compose-box">
                                                        <div class="compose-content">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="mb-4 mail-form">
                                                                            <p>From:</p>
                                                                            <select class="form-control" id="m-form">
                                                                                <option value="info@mail.com">Info &lt;info@mail.com&gt;</option>
                                                                                <option value="shaun@mail.com">Shaun Park &lt;shaun@mail.com&gt;</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-4 mail-to">
                                                                            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> To:</p>
                                                                            <div class="">
                                                                                <input type="email" id="m-to" class="form-control">
                                                                                <span class="validation-text"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="mb-4 mail-cc">
                                                                            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg> CC:</p>
                                                                            <div>
                                                                                <input type="text" id="m-cc" class="form-control">
                                                                                <span class="validation-text"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-4 mail-subject">
                                                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Subject:</p>
                                                                    <div class="w-100">
                                                                        <input type="text" id="m-subject" class="form-control">
                                                                        <span class="validation-text"></span>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="">
                                                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Upload Attachment:</p>
                                                                    <!-- <input type="file" class="form-control-file" id="mail_File_attachment" multiple="multiple"> -->
                                                                    <input class="form-control file-upload-input" type="file" id="formFile" multiple="multiple">
                                                                </div>
    
                                                                <div id="editor-container">
    
                                                                </div>
    
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button id="btn-save" class="btn float-left btn-success"> Save</button>
                                                    <button id="btn-reply-save" class="btn float-left btn-success"> Save Reply</button>
                                                    <button id="btn-fwd-save" class="btn float-left btn-success"> Save Fwd</button>
    
                                                    <button class="btn" data-bs-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>
    
                                                    <button id="btn-reply" class="btn btn-primary"> Reply</button>
                                                    <button id="btn-fwd" class="btn btn-primary"> Forward</button>
                                                    <button id="btn-send" class="btn btn-primary"> Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
    
    
                            </div>
    
                        </div>
                    </div>

                </div>
                
            </div>

            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper mt-0">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../src/plugins/src/global/vendors.min.js"></script>
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/semi-dark-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="../src/plugins/src/editors/quill/quill.js"></script>
    <script src="../src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
    <script src="../src/plugins/src/notification/snackbar/snackbar.min.js"></script>
    <script src="../src/assets/js/apps/mailbox.js"></script>
</body>
</html>