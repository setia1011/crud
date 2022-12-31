<?php include 'template/header.php'; ?>

<div class="columns">
    <div class="column is-half">
        <button class="button is-small">
            <span class="icon">
                <iconify-icon icon="mdi:register"></iconify-icon>
            </span>
            <span class="has-text-weight-semibold">Daftar</span>
        </button>
        <br>
        <br>
        <form autocomplete="off" action="proses.php" method="POST">
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input is-small" type="username" name="username" placeholder="Username">
                    <span class="icon is-small is-left"><iconify-icon icon="mdi:user"></iconify-icon></span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input is-small" type="password" name="password" placeholder="Password">
                    <span class="icon is-small is-left"><iconify-icon icon="material-symbols:password"></iconify-icon></span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input is-small" type="text" name="name" placeholder="Name">
                    <span class="icon is-small is-left"><iconify-icon icon="mdi:user"></iconify-icon></span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input is-small" type="email" name="email" placeholder="Email">
                    <span class="icon is-small is-left"><iconify-icon icon="ic:twotone-email"></iconify-icon></span>
                </p>
            </div>
            <div class="select is-small">
                <select name="status">
                    <option value="aktif">Aktif</option>
                    <option value="tidak aktif" selected>Tidak Aktif</option>
                </select>   
            </div>
            <br>
            <br>
            <input type="hidden" name="action" value="daftar">
            <button class="button is-small is-info">
                <span class="icon is-small">
                    <iconify-icon icon="iconoir:submit-document"></iconify-icon>
                </span>
                <span>Kirim</span>
            </button>
        </form>
    </div>
</div>


<?php include 'template/footer.php'; ?>