<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="eyebrow">Dashboard Overview</div>

<h1 class="page-title">Welcome to SwiftPOS</h1>

<p class="page-description">
    A simple and organized Point-of-Sale management system.
    Manage your customers and user accounts in one place.
</p>

<div class="stats-grid">

    <div class="card">
        <div class="stat-label">Total Customers</div>
        <div class="stat-value">
            <?= esc($totalCustomers ?? 0) ?>
        </div>
        <p>Registered customer accounts</p>
    </div>

    <div class="card">
        <div class="stat-label">Total Users</div>
        <div class="stat-value">
            <?= esc($totalUsers ?? 0) ?>
        </div>
        <p>Registered system users</p>
    </div>

</div>

<div class="card">
    <h2>About the System</h2>
    <p>
        SwiftPOS is developed using CodeIgniter 4
        and MySQL. It demonstrates the use of the
        Model-View-Controller architecture and
        database-driven record management.
    </p>
</div>

<?= $this->endSection() ?>
