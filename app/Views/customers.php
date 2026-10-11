<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="eyebrow">Account Management</div>

<h1 class="page-title">Customer Accounts</h1>

<p class="page-description">
    View and manage your registered customer records.
    Data is retrieved directly from MySQL.
</p>

<div class="table-card">

    <div class="table-header">
        <h2>Customer Directory</h2>
        <p><?= count($customers) ?> customer records found</p>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Date Created</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['id']) ?></td>

                        <td class="name-cell">
                            <?= esc($customer['full_name']) ?>
                        </td>

                        <td><?= esc($customer['email']) ?></td>

                        <td><?= esc($customer['phone'] ?? 'N/A') ?></td>

                        <td><?= esc($customer['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>

                <?php if (empty($customers)): ?>
                    <tr>
                        <td colspan="5">
                            No customer records found.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>

<?= $this->endSection() ?>
