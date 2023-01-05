<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="icon" type="image/png" href="assets/images/add-64.png"/>
    <link rel="stylesheet" href="assets/libs/fontawesome6/css/all.min.css">
    <link rel="stylesheet" href="assets/libs/bulma/bulma.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/script.js" async></script>
</head>
<body>

<div id="header" >
    <div class="container is-max-desktop p-32">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/crud">
                    <img src="assets/images/add-512.png" height="28">
                </a>
                <a role="button" data="1" id="nav1" class="navix navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a href="/crud" class="navbar-item">Home</a>
                    <a href="documentation.php" class="navbar-item">Documentation</a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">User</a>
                        <div class="navbar-dropdown">
                            <a href="list.php" class="navbar-item">List</a>
                            <a href="daftar.php" class="navbar-item">Daftar</a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">Lainnya</a>
                        </div>
                    </div>
                </div>
                
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary has-background-white has-text-primary">
                                <strong>Hi.. Setia</strong>
                            </a>
                            <a href="proses.php?action=logout" class="exit button is-light">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile sidebar -->
            <div id="mySidenav" class="sidenav">
                <aside class="menu">
                    <div class="menu-label-top">
                        <a href="/crud" class="has-text-grey-light">
                            <img src="assets/images/add-512.png" height="28" width="17">
                        </a>
                        <span role="button" data="2" id="nav2" class="navix closebtn has-text-grey-light">
                            <i class="fa-thin fa-xmark"></i>
                        </span>
                    </div>
                    <ul class="menu-list">
                        <li>
                            <a href="/crud" class="has-text-grey-lighter">
                                <i class="fa-light fa-map-pin icon-menu-parent fa-rotate-270"></i> Home
                            </a>
                        </li>
                        <li>
                            <a href="documentation.php" class="has-text-grey-lighter">
                                <i class="fa-light fa-map-pin icon-menu-parent fa-rotate-270"></i> Documentation
                            </a>
                        </li>
                        <li>
                            <a class="menu-has-sub has-text-grey-lighter">
                                <i class="fa-light fa-map-pin icon-menu-parent fa-rotate-270"></i> User 
                                <span class="is-pulled-right" style="line-height: 30px;">
                                    <i class="fa-solid fa-angle-right hidex"></i>
                                    <i class="fa-solid fa-angle-down showx"></i>
                                </span>
                            </a>
                            <ul class="menu-has-sub-list">
                                <li class="p-1">
                                    <a href="list.php" class="p-0 has-text-grey-light">
                                        <i class="fa-solid fa-check"></i> List
                                    </a>
                                </li>
                                <li class="p-1">
                                    <a href="daftar.php" class="p-0 has-text-grey-light">
                                        <i class="fa-solid fa-check"></i> Daftar
                                    </a>
                                </li>
                                <li class="p-1">
                                    <a class="p-0 has-text-grey-light">
                                        <i class="fa-solid fa-check"></i> Lainnya
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>
        </nav>
    </div>
</div>

<div id="main" class="container is-max-desktop p-32">