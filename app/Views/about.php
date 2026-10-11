<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - SwiftPOS</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }
        nav {
            background: white;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px #ddd;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #2563eb;
        }
        nav a {
            margin-left: 30px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        nav a:hover {
            color: #2563eb;
        }
        main {
            padding: 70px 5%;
        }
        h1 {
            font-size: 36px;
            color: #111827;
        }
        p {
            font-size: 18px;
            color: #64748b;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">SwiftPOS</div>
        <div>
            <a href="<?= site_url('/') ?>">Home</a>
            <a href="<?= site_url('about') ?>">About</a>
            <a href="<?= site_url('customers') ?>">Customers</a>
            <a href="<?= site_url('users') ?>">Users</a>
        </div>
    </nav>

    <main>
        <h1>About SwiftPOS</h1>
        <p>
            SwiftPOS is a Point-of-Sale system developed
            using CodeIgniter 4 and MySQL.
        </p>
        <p>
            This project demonstrates how customer and user
            account information can be retrieved from a
            database using the Model-View-Controller
            architecture.
        </p>
    </main>

</body>
</html>
