<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD: Login</title>
    <link rel="icon" type="image/png" href="assets/images/add-64.png"/>
    <script src="assets/js/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="assets/bulma/bulma.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <div class="columns is-mobile mt-6">
        <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd m-auto">
            <form action="proses.php" method="POST">
                <div>
                    <figure class="image is-64x64">
                        <img src="assets/images/add-512.png" height="28">
                    </figure>
                </div>
                <div class="mt-6 mb-4 is-size-6">Gunakan username dan password Anda<br>untuk mengakses <b>CRUD</b></div>
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="text" name="username" placeholder="Username">
                        <span class="icon is-small is-left">
                            <iconify-icon icon="mdi:user-check-outline"></iconify-icon>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="password" name="password" placeholder="Password">
                        <span class="icon is-small is-left">
                            <iconify-icon icon="ic:sharp-password"></iconify-icon>
                        </span>
                    </p>
                </div>
                <input type="hidden" name="action" value="login">
                <input type="submit" class="button is-success" value="Login">
            </form>
        </div>
    </div>
</div>
    
</body>
</html>