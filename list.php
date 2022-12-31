<?php include 'template/header.php'; ?>

<?php
include "db.php";
$q = mysqli_query($db, "SELECT * FROM user");
?>

<div class="columns">
    <div class="column">
        <button class="button is-small">
            <span class="icon">
                <iconify-icon icon="mdi:format-list-text"></iconify-icon>
            </span>
            <span class="has-text-weight-semibold">List</span>
        </button>
        <br>
        <br>
        <table class="table is-fullwidth is-narrow">
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
                    <td><?= $user['status']; ?></td>
                    <!-- <td>
                        <a class="delete" href="process.php?action=delete&id=<?= $user['id']; ?>">&#10006;</a> |
                        <a class="update" href="update.php?action=update&id=<?= $user['id']; ?>">&#9998;</a>
                    </td> -->
                    <td class="has-text-center" style="width: 90px;">
                        <div class="is-inline-flex">
                            <button class="button is-small is-success"><iconify-icon icon="material-symbols:edit-document-rounded"></iconify-icon></button>&nbsp;
                            <button class="button is-small is-danger"><iconify-icon icon="clarity:trash-solid"></iconify-icon></button>
                        </div>
                    </td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'template/footer.php'; ?>