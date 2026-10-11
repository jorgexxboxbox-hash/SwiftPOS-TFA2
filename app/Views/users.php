<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="eyebrow">Account Management</div>

<h1 class="page-title">User Accounts</h1>

<p class="page-description">
    View registered system users and their account details.
    Records are retrieved from MySQL.
</p>

<div class="table-card">

    <div class="table-header">
        <h2>User Directory</h2>
        <p><?= count($users) ?> user records found</p>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Date Created</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['id']) ?></td>

                        <td>
                            <span class="badge">
                                <?= esc($user['username']) ?>
                            </span>
                        </td>

                        <td class="name-cell">
                            <?= esc($user['full_name']) ?>
                        </td>

                        <td><?= esc($user['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>

                <?php if (empty($users)): ?>
                    <tr>
                        <td colspan="4">
                            No user records found.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>

<?= $this->endSection() ?>
