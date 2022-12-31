<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="icon" type="image/png" href="assets/images/add-64.png"/>
    <script src="assets/js/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="assets/bulma/bulma.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div id="header" class="container is-max-desktop p-32">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/crud">
                <img src="assets/images/add-512.png" height="28">
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
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
                        <a href="proses.php?action=logout" class="exit button is-light"><iconify-icon icon="ion:exit-sharp"></iconify-icon></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div id="main" class="container is-max-desktop p-32">