<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'SwiftPOS') ?></title>

    <link rel="stylesheet"
          href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<header class="navbar">
    <div class="nav-container">

        <a href="<?= site_url('/') ?>" class="brand">
            <span class="brand-icon">S</span>
            SwiftPOS
        </a>

        <nav class="nav-links">
            <a href="<?= site_url('/') ?>"
               class="<?= ($active ?? '') === 'home' ? 'active' : '' ?>">
                Home
            </a>

            <a href="<?= site_url('about') ?>"
               class="<?= ($active ?? '') === 'about' ? 'active' : '' ?>">
                About
            </a>

            <a href="<?= site_url('customers') ?>"
               class="<?= ($active ?? '') === 'customers' ? 'active' : '' ?>">
                Customers
            </a>

            <a href="<?= site_url('users') ?>"
               class="<?= ($active ?? '') === 'users' ? 'active' : '' ?>">
                Users
            </a>
        </nav>

    </div>
</header>

<main class="container">
    <?= $this->renderSection('content') ?>
</main>

<footer class="footer">
    SwiftPOS &copy; <?= date('Y') ?>.
    Built with CodeIgniter 4 and MySQL.
</footer>

</body>
</html>
