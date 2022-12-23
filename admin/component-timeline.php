<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Timeline | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="../src/assets/img/favicon.ico"/>
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
    <link href="../src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/timeline.css" rel="stylesheet" type="text/css" />

    <link href="../src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/timeline.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <style>
        .toggle-code-snippet { margin-bottom: 0px; }
        body.dark .toggle-code-snippet { margin-bottom: 0px; }
    </style>

</head>
<body class="layout-boxed " data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100">
    
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

                    <li class="menu">
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

                    <li class="menu active">
                        <a href="#components" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Components</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="components" data-bs-parent="#accordionExample">
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
                            <li class="active">
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
            <div class="container">

                <div class="container">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Components</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Timeline</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#timelineBasic" class="nav-link">Basic</a>
                            <a href="#timelineMinimal" class="nav-link">Minimal</a>
                            <a href="#timelineImages" class="nav-link">Images</a>
                            <a href="#timelineModern" class="nav-link">Modern</a>
                            <a href="#timelineProfile" class="active nav-link">Profile</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="timelineBasic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                               <div class="widget-header">
                                   <div class="row">
                                       <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                           <h4> Basic</h4>
                                       </div>
                                   </div>
                               </div>
                               <div class="widget-content widget-content-area pb-1">
                                    <ol class="timeline">
                                        <li class="timeline-item">
                                            <span class="timeline-item-icon avatar-icon">
                                                <i class="avatar">
                                                    <img alt="profile" src="../src/assets/img/profile-5.jpeg" />
                                                </i>
                                            </span>
                                            <div class="new-comment">
                                                <input type="text" class="form-control" placeholder="Add a comment..." />
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <span class="timeline-item-icon faded-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            </span>
                                            <div class="timeline-item-description">
                                                <i>
                                                    <img alt="profile" src="../src/assets/img/profile-20.jpeg" />
                                                </i>
                                                <span class="align-self-center"><a href="#">Mary McDonald</a> has changed <a href="#">2 attributes</a> on <span>May 21, 2022</span></span>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <span class="timeline-item-icon faded-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                            </span>
                                            <div class="timeline-item-description">
                                                <i>
                                                    <img alt="profile" src="../src/assets/img/profile-12.jpeg" />
                                                </i>
                                                <span class="align-self-center"><a href="#">Linda Park</a> moved <a href="#">Eric Lubin</a> to <a href="#"> Technical Test</a> on <span>May 20, 2022</span></span>
                                            </div>
                                        </li>
                                        <li class="timeline-item extra-space">
                                            <span class="timeline-item-icon filled-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                            </span>
                                            <div class="timeline-item-wrapper">
                                                <div class="timeline-item-description">
                                                    <i>
                                                        <img alt="profile" src="../src/assets/img/profile-24.jpeg" />
                                                    </i>
                                                    <span class="align-self-center"><a href="#">Daisy Anderson</a> commented on <span>May 20, 2022</span></span>
                                                </div>
                                                <div class="comment">
                                                    <p>I've sent him the assignment we discussed recently, he is coming back to us this week. Regarding to our last call, I really enjoyed talking to him and so far he has the profile we are looking for. Can't wait to see his technical test, I'll keep you posted and we'll debrief it all together!</p>
                                                    <button class="btn btn-secondary btn-like mt-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                                        <span class="btn-text-inner">Like</span>
                                                    </button>
                                                </div>
                                                <div class="show-replies">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-forward" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M15 11l4 4l-4 4m4 -4h-11a4 4 0 0 1 0 -8h1" />
                                                    </svg>
                                                    Show 3 replies
                                                    <div class="avatar--group ms-3">
                                                        <div class="avatar avatar-sm">
                                                            <img alt="avatar" src="../src/assets/img/profile-16.jpeg" class="rounded-circle">
                                                        </div>
                                                        <div class="avatar avatar-sm">
                                                            <img alt="avatar" src="../src/assets/img/delete-user-4.jpeg" class="rounded-circle">
                                                        </div>
                                                        <div class="avatar avatar-sm">
                                                            <img alt="avatar" src="../src/assets/img/profile-5.jpeg" class="rounded-circle">
                                                        </div>
                                                        <div class="avatar avatar-sm">
                                                            <span class="avatar-title rounded-circle">AG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>

                                   <div class="code-section-container">
                                               
                                       <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                                       <div class="code-section text-left">
                                           <pre>
&lt;div class="mt-container mx-auto"&gt;
   &lt;div class="timeline-line"&gt;
       
       &lt;div class="item-timeline"&gt;
           &lt;p class="t-time"&gt;10:00&lt;/p&gt;
           &lt;div class="t-dot t-dot-primary"&gt;
           &lt;/div&gt;
           &lt;div class="t-text"&gt;
               &lt;p&gt;Updated Server Logs&lt;/p&gt;
               &lt;p class="t-meta-time"&gt;25 mins ago&lt;/p&gt;
           &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="item-timeline"&gt;
           &lt;p class="t-time"&gt;12:45&lt;/p&gt;
           &lt;div class="t-dot t-dot-success"&gt;
           &lt;/div&gt;
           &lt;div class="t-text"&gt;
               &lt;p&gt;Backup Files EOD&lt;/p&gt;
               &lt;p class="t-meta-time"&gt;2 hrs ago&lt;/p&gt;
           &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="item-timeline"&gt;
           &lt;p class="t-time"&gt;14:00&lt;/p&gt;
           &lt;div class="t-dot t-dot-warning"&gt;
           &lt;/div&gt;
           &lt;div class="t-text"&gt;
               &lt;p&gt;Send Mail to HR and Admin&lt;/p&gt;
               &lt;p class="t-meta-time"&gt;4 hrs ago&lt;/p&gt;
           &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="item-timeline"&gt;
           &lt;p class="t-time"&gt;16:00&lt;/p&gt;
           &lt;div class="t-dot t-dot-info"&gt;
           &lt;/div&gt;
           &lt;div class="t-text"&gt;
               &lt;p&gt;Conference call with Marketing Manager.&lt;/p&gt;
               &lt;p class="t-meta-time"&gt;6 hrs ago&lt;/p&gt;
           &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="item-timeline"&gt;
           &lt;p class="t-time"&gt;17:00&lt;/p&gt;
           &lt;div class="t-dot t-dot-danger"&gt;
           &lt;/div&gt;
           &lt;div class="t-text"&gt;
               &lt;p&gt;Collected documents from &lt;a href="javascript:void(0);"&gt;Sara&lt;/a&gt;&lt;/p&gt;
               &lt;p class="t-meta-time"&gt;9 hrs ago&lt;/p&gt;
           &lt;/div&gt;
       &lt;/div&gt;

       &lt;div class="item-timeline"&gt;
           &lt;p class="t-time"&gt;16:00&lt;/p&gt;
           &lt;div class="t-dot t-dot-dark"&gt;
           &lt;/div&gt;
           &lt;div class="t-text"&gt;
               &lt;p&gt;Server rebooted successfully&lt;/p&gt;
               &lt;p class="t-meta-time"&gt;8 hrs ago&lt;/p&gt;
           &lt;/div&gt;
       &lt;/div&gt;

   &lt;/div&gt;                                    
&lt;/div&gt;</pre>
                                       </div>
                                   </div>

                               </div>
                           </div>
                       </div>
                        
                        
                        <div id="timelineMinimal" class="col-lg-12 layout-spacing">
                             <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Minimal</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area pb-1">
                                    <div class="mt-container mx-auto">
                                        <div class="timeline-line">
                                            
                                            <div class="item-timeline">
                                                <p class="t-time">10:00</p>
                                                <div class="t-dot t-dot-primary">
                                                </div>
                                                <div class="t-text">
                                                    <p>Updated Server Logs</p>
                                                    <p class="t-meta-time">25 mins ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <p class="t-time">12:45</p>
                                                <div class="t-dot t-dot-success">
                                                </div>
                                                <div class="t-text">
                                                    <p>Backup Files EOD</p>
                                                    <p class="t-meta-time">2 hrs ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <p class="t-time">14:00</p>
                                                <div class="t-dot t-dot-warning">
                                                </div>
                                                <div class="t-text">
                                                    <p>Send Mail to HR and Admin</p>
                                                    <p class="t-meta-time">4 hrs ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <p class="t-time">16:00</p>
                                                <div class="t-dot t-dot-info">
                                                </div>
                                                <div class="t-text">
                                                    <p>Conference call with Marketing Manager.</p>
                                                    <p class="t-meta-time">6 hrs ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <p class="t-time">17:00</p>
                                                <div class="t-dot t-dot-danger">
                                                </div>
                                                <div class="t-text">
                                                    <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                                    <p class="t-meta-time">9 hrs ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <p class="t-time">16:00</p>
                                                <div class="t-dot t-dot-dark">
                                                </div>
                                                <div class="t-text">
                                                    <p>Server rebooted successfully</p>
                                                    <p class="t-meta-time">8 hrs ago</p>
                                                </div>
                                            </div>

                                        </div>                                    
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="mt-container mx-auto"&gt;
    &lt;div class="timeline-line"&gt;
        
        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;10:00&lt;/p&gt;
            &lt;div class="t-dot t-dot-primary"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Updated Server Logs&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;25 mins ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;12:45&lt;/p&gt;
            &lt;div class="t-dot t-dot-success"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Backup Files EOD&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;2 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;14:00&lt;/p&gt;
            &lt;div class="t-dot t-dot-warning"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Send Mail to HR and Admin&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;4 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;16:00&lt;/p&gt;
            &lt;div class="t-dot t-dot-info"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Conference call with Marketing Manager.&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;6 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;17:00&lt;/p&gt;
            &lt;div class="t-dot t-dot-danger"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Collected documents from &lt;a href="javascript:void(0);"&gt;Sara&lt;/a&gt;&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;9 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;16:00&lt;/p&gt;
            &lt;div class="t-dot t-dot-dark"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Server rebooted successfully&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;8 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

    &lt;/div&gt;                                    
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="timelineImages" class="col-lg-12 layout-spacing">
                             <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> With Images </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="mt-container mx-auto">
                                        <div class="timeline-alter">
                                            
                                            <div class="item-timeline">
                                                <div class="t-time">
                                                    <p class="">09:00</p>
                                                </div>
                                                <div class="t-img">
                                                    <img src="../src/assets/img/profile-20.jpeg" alt="avatar">
                                                </div>
                                                <div class="t-meta-time">
                                                    <p class="">25 mins ago</p>
                                                </div>
                                                
                                                <div class="t-text">
                                                    <p>Conference call with Marketing Manager.</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <div class="t-time">
                                                    <p class="">10:00</p>
                                                </div>
                                                <div class="t-usr-txt">
                                                    <p><span>L</span></p>
                                                </div>
                                                <div class="t-meta-time">
                                                    <p class="">2 hrs ago</p>
                                                </div>
                                                
                                                <div class="t-text">
                                                    <p>Server rebooted successfully</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <div class="t-time">
                                                    <p class="">11:00</p>
                                                </div>
                                                <div class="t-img">
                                                    <img src="../src/assets/img/profile-6.jpeg" alt="avatar">
                                                </div>
                                                <div class="t-meta-time">
                                                    <p class="">4 hrs ago</p>
                                                </div>
                                                
                                                <div class="t-text">
                                                    <p>Backup Files EOD</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <div class="t-time">
                                                    <p class="">12:00</p>
                                                </div>
                                                <div class="t-img">
                                                    <img src="../src/assets/img/profile-11.jpeg" alt="avatar">
                                                </div>
                                                <div class="t-meta-time">
                                                    <p class="">6 hrs ago</p>
                                                </div>
                                                
                                                <div class="t-text">
                                                    <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <div class="t-time">
                                                    <p class="">14:00</p>
                                                </div>
                                                <div class="t-usr-txt">
                                                    <p><span>G</span></p>
                                                </div>
                                                <div class="t-meta-time">
                                                    <p class="">9 hrs ago</p>
                                                </div>
                                                
                                                <div class="t-text">
                                                    <p>PDF file Download</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="mt-container mx-auto"&gt;
    &lt;div class="timeline-alter"&gt;
        
        &lt;div class="item-timeline"&gt;
            &lt;div class="t-time"&gt;
                &lt;p class=""&gt;09:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-img"&gt;
                &lt;img src="../src/assets/img/profile-20.jpeg"&gt;
            &lt;/div&gt;
            &lt;div class="t-meta-time"&gt;
                &lt;p class=""&gt;25 mins ago&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class="t-text"&gt;
                &lt;p&gt;Conference call with Marketing Manager.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;div class="t-time"&gt;
                &lt;p class=""&gt;10:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-usr-txt"&gt;
                &lt;p&gt;&lt;span&gt;L&lt;/span&gt;&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-meta-time"&gt;
                &lt;p class=""&gt;2 hrs ago&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class="t-text"&gt;
                &lt;p&gt;Server rebooted successfully&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;div class="t-time"&gt;
                &lt;p class=""&gt;11:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-img"&gt;
                &lt;img src="../src/assets/img/profile-6.jpeg"&gt;
            &lt;/div&gt;
            &lt;div class="t-meta-time"&gt;
                &lt;p class=""&gt;4 hrs ago&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class="t-text"&gt;
                &lt;p&gt;Backup Files EOD&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;div class="t-time"&gt;
                &lt;p class=""&gt;12:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-img"&gt;
                &lt;img src="../src/assets/img/profile-11.jpeg"&gt;
            &lt;/div&gt;
            &lt;div class="t-meta-time"&gt;
                &lt;p class=""&gt;6 hrs ago&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class="t-text"&gt;
                &lt;p&gt;Collected documents from &lt;a href="javascript:void(0);"&gt;Sara&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;div class="t-time"&gt;
                &lt;p class=""&gt;14:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-usr-txt"&gt;
                &lt;p&gt;&lt;span&gt;G&lt;/span&gt;&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-meta-time"&gt;
                &lt;p class=""&gt;9 hrs ago&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class="t-text"&gt;
                &lt;p&gt;PDF file Download&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="timelineModern" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Modern</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="container mt-container p-0">
                                                <ul class="modern-timeline pl-0">
                                                    <li>
                                                        <div class="modern-timeline-badge"></div>
                                                        <div class="modern-timeline-panel">
                                                            <div class="modern-timeline-preview"><img src="../src/assets/img/tl-2.jpeg" alt="timeline"></div>
                                                            <div class="modern-timeline-body">
                                                                <h4 class="mb-4">Front-End Framework</h4>
                                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="modern-timeline-badge"></div>
                                                        <div class="modern-timeline-panel">
                                                            <div class="modern-timeline-preview"><img src="../src/assets/img/tl-4.jpeg" alt="timeline"></div>
                                                            <div class="modern-timeline-body">
                                                                <h4 class="mb-4">Web Development</h4>
                                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="modern-timeline-badge"></div>
                                                        <div class="modern-timeline-panel">
                                                            <div class="modern-timeline-preview"><img src="../src/assets/img/tl-3.jpeg" alt="timeline"></div>
                                                            <div class="modern-timeline-body">
                                                                <h4 class="mb-4">Theme Development</h4>
                                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="modern-timeline-badge"></div>
                                                        <div class="modern-timeline-panel">
                                                            <div class="modern-timeline-preview"><img src="../src/assets/img/tl-5.jpeg" alt="timeline"></div>
                                                            <div class="modern-timeline-body">
                                                                <h4 class="mb-4">Plugin Development</h4>
                                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="position-static">
                                                        <div class="modern-timeline-top"></div>
                                                    </li>
                                                    <li class="position-static">
                                                        <div class="modern-timeline-bottom"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="container mt-container"&gt;
    &lt;ul class="modern-timeline pl-0"&gt;
        &lt;li&gt;
            &lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
            &lt;div class="modern-timeline-panel"&gt;
                &lt;div class="modern-timeline-preview"&gt;&lt;img src="../src/assets/img/tl-5.jpeg" alt="timeline"&gt;&lt;/div&gt;
                &lt;div class="modern-timeline-body"&gt;
                    &lt;h4 class="mb-4"&gt;Front-End Framework&lt;/h4&gt;
                    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
            &lt;div class="modern-timeline-panel"&gt;
                &lt;div class="modern-timeline-preview"&gt;&lt;img src="../src/assets/img/tl-2.jpeg" alt="timeline"&gt;&lt;/div&gt;
                &lt;div class="modern-timeline-body"&gt;
                    &lt;h4 class="mb-4"&gt;Web Development&lt;/h4&gt;
                    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
            &lt;div class="modern-timeline-panel"&gt;
                &lt;div class="modern-timeline-preview"&gt;&lt;img src="../src/assets/img/tl-3.jpeg" alt="timeline"&gt;&lt;/div&gt;
                &lt;div class="modern-timeline-body"&gt;
                    &lt;h4 class="mb-4"&gt;Theme Development&lt;/h4&gt;
                    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
            &lt;div class="modern-timeline-panel"&gt;
                &lt;div class="modern-timeline-preview"&gt;&lt;img src="../src/assets/img/tl-4.jpeg" alt="timeline"&gt;&lt;/div&gt;
                &lt;div class="modern-timeline-body"&gt;
                    &lt;h4 class="mb-4"&gt;Plugin Development&lt;/h4&gt;
                    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="position-static"&gt;
            &lt;div class="modern-timeline-top"&gt;&lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="position-static"&gt;
            &lt;div class="modern-timeline-bottom"&gt;&lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="timelineProfile" class="col-lg-12 layout-spacing">
                             <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Profile</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="timeline-simple">
                                        <p class="timeline-title">History</p>

                                        <div class="timeline-list">
                                            <p class="meta-update-day">Today</p>
                                            
                                            <div class="timeline-post-content">
                                                <div class="user-profile">
                                                    <img src="../src/assets/img/profile-11.jpeg" alt="">
                                                </div>
                                                <div class="">
                                                    <h4>Laurie Fox</h4>
                                                    <p class="meta-time-date">5 sec</p>
                                                    <div class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                        <h6 class="">Trending Style</h6>
                                                        <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.</p>
                                                        <div class="post-contributers">
                                                            <img src="../src/assets/img/profile-25.jpeg" alt="">
                                                            <img src="../src/assets/img/profile-15.jpeg" alt="">
                                                            <img src="../src/assets/img/profile-8.jpeg" alt="">
                                                            <img src="../src/assets/img/profile-10.jpeg" alt="">
                                                            <img src="../src/assets/img/profile-12.jpeg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="timeline-post-content post-gallery">
                                                <div class="user-profile">
                                                    <img src="../src/assets/img/profile-7.jpeg" alt="avatar">
                                                </div>
                                                <div class="">
                                                    <h4>Justin Cross</h4>
                                                    <p class="meta-time-date">45 min</p>
                                                    <div class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                        <h6 class="">Nature Photography</h6>
                                                        <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.</p>
                                                        <div class="post-gallery-img">
                                                            <img src="../src/assets/img/grid-blog-style-2.jpeg" alt="timeline">
                                                            <img src="../src/assets/img/grid-blog-style-1.jpg" alt="timeline">
                                                            <img src="../src/assets/img/list-blog-style-2.jpeg" alt="timeline">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="timeline-post-content">
                                                <div class="user-profile">
                                                    <img src="../src/assets/img/profile-25.jpeg" alt="avatar">
                                                </div>
                                                <div class="">
                                                    <h4>Sonia Shaw</h4>
                                                    <p class="meta-time-date">2 hr</p>
                                                    <div class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                        <h6 class="">Create new Project</h6>
                                                        <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.</p>
                                                        <div class="post-contributers">
                                                            <img src="../src/assets/img/profile-6.jpeg" alt="timeline">
                                                            <img src="../src/assets/img/profile-16.jpeg" alt="timeline">
                                                            <img src="../src/assets/img/profile-11.jpeg" alt="timeline">
                                                            <img src="../src/assets/img/profile-7.jpeg" alt="timeline">
                                                            <img src="../src/assets/img/profile-10.jpeg" alt="timeline">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="timeline-simple"&gt;
    &lt;p class="timeline-title"&gt;History&lt;/p&gt;

    &lt;div class="timeline-list"&gt;
        &lt;p class="meta-update-day"&gt;Today&lt;/p&gt;
        
        &lt;div class="timeline-post-content"&gt;
            &lt;div class="user-profile"&gt;
                &lt;img src="../src/assets/img/profile-11.jpeg" class=""&gt;
            &lt;/div&gt;
            &lt;div class=""&gt;
                &lt;h4&gt;Laurie Fox&lt;/h4&gt;
                &lt;p class="meta-time-date"&gt;5 sec&lt;/p&gt;
                &lt;div class=""&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;h6 class=""&gt;Trending Style&lt;/h6&gt;
                    &lt;p class="post-text"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.&lt;/p&gt;
                    &lt;div class="post-contributers"&gt;
                        &lt;img src="../src/assets/img/profile-25.jpeg" class=""&gt;
                        &lt;img src="../src/assets/img/profile-15.jpeg" class=""&gt;
                        &lt;img src="../src/assets/img/profile-8.jpeg" class=""&gt;
                        &lt;img src="../src/assets/img/profile-10.jpeg" class=""&gt;
                        &lt;img src="../src/assets/img/profile-12.jpeg" class=""&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="timeline-post-content post-gallery"&gt;
            &lt;div class="user-profile"&gt;
                &lt;img src="../src/assets/img/profile-7.jpeg" class=""&gt;
            &lt;/div&gt;
            &lt;div class=""&gt;
                &lt;h4&gt;Justin Cross&lt;/h4&gt;
                &lt;p class="meta-time-date"&gt;45 min&lt;/p&gt;
                &lt;div class=""&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;h6 class=""&gt;Nature Photography&lt;/h6&gt;
                    &lt;p class="post-text"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.&lt;/p&gt;
                    &lt;div class="post-gallery-img"&gt;
                        &lt;img src="../src/assets/img/grid-blog-style-2.jpeg" class=""&gt;
                        &lt;img src="../src/assets/img/grid-blog-style-1.jpg" class=""&gt;
                        &lt;img src="../src/assets/img/list-blog-style-2.jpeg" class=""&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="timeline-post-content"&gt;
            &lt;div class="user-profile"&gt;
                &lt;img src="../src/assets/img/profile-25.jpeg" class=""&gt;
            &lt;/div&gt;
            &lt;div class=""&gt;
                &lt;h4&gt;Sonia Shaw&lt;/h4&gt;
                &lt;p class="meta-time-date"&gt;2 hr&lt;/p&gt;
                &lt;div class=""&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;h6 class=""&gt;Create new Project&lt;/h6&gt;
                    &lt;p class="post-text"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.&lt;/p&gt;
                    &lt;div class="post-contributers"&gt;
                        &lt;img src="../src/assets/img/profile-6.jpeg" class=""&gt;
                        &lt;img src="../src/assets/img/profile-16.jpeg" class=""&gt;
                        &lt;img src="../src/assets/img/profile-11.jpeg" class=""&gt;
                        &lt;img src="../src/assets/img/profile-7.jpeg" class=""&gt;
                        &lt;img src="../src/assets/img/profile-10.jpeg" class=""&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
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
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/semi-dark-menu/app.js"></script>
    <script src="../src/plugins/src/highlight/highlight.pack.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="../src/assets/js/scrollspyNav.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
</body>
</html>