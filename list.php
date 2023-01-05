<?php include 'template/header.php'; ?>

<?php
include "db.php";
$q = mysqli_query($db, "SELECT * FROM user");
?>

<div class="columns">
    <div class="column">
        <button class="button is-small">
            <span class="icon">
            <i class="fa-light fa-address-book"></i>
            </span>
            <span class="has-text-weight-semibold">List</span>
        </button>
        <br>
        <br>
        <table class="table is-fullwidth is-narrow is-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; while ($user = mysqli_fetch_assoc($q)) { ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['password']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                        <span class="<?= $st = $user['status'] == 'aktif' ? 'tag is-success' : 'tag is-warning'; ?>">
                            <?= $user['status']; ?>
                        </span>
                    </td>
                    <!-- <td>
                        <a class="delete" href="process.php?action=delete&id=<?= $user['id']; ?>">&#10006;</a> |
                        <a class="update" href="update.php?action=update&id=<?= $user['id']; ?>">&#9998;</a>
                    </td> -->
                    <td class="has-text-center" style="width: 90px;">
                        <div class="is-inline-flex">
                            <button class="button is-small is-success"><i class="fa-solid fa-pen-to-square"></i></button>&nbsp;
                            <button class="button is-small is-danger"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'template/footer.php'; ?>