# SwiftPOS - IT0049 TFA2

## Project Overview

SwiftPOS is a web-based Point-of-Sale application developed using CodeIgniter 4 and MySQL for the IT0049 Web System Technologies Technical Formative Assessment 2.

The project demonstrates how static PHP arrays can be replaced with a MySQL database using CodeIgniter's Model-View-Controller (MVC) architecture.

## Features

- Home dashboard displaying customer and user counts
- About page containing project information
- Customer Accounts page displaying database records
- User Accounts page displaying database records
- MySQL integration using CodeIgniter Models
- Query Builder-based data retrieval using `findAll()`
- Responsive Blue and White interface

## Technologies Used

- PHP 8.2+
- CodeIgniter 4
- MySQL / MariaDB
- HTML and CSS
- XAMPP
- Composer

## Installation and Setup

1. Download or clone the GitHub repository.
2. Open the project folder in VS Code.
3. Run `composer install` in the terminal.
4. Start Apache and MySQL using XAMPP.
5. Open phpMyAdmin and create a database named `tfa2_pos`.
6. Import `database/tfa2_pos.sql` into the database.
7. Copy the `env` template to `.env`, or create `.env` if the template is unavailable.
8. Configure the database connection in `.env`:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = 127.0.0.1
database.default.database = tfa2_pos
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

9. Run `php spark serve` in the project terminal.
10. Open `http://localhost:8080` in your browser.

## Application Pages

- Home: `/`
- About: `/about`
- Customers: `/customers`
- Users: `/users`

## Database Structure

**Customers table:** `id`, `full_name`, `email`, `phone`, `created_at`

**Users table:** `id`, `username`, `full_name`, `created_at`

Each table contains five sample records.

## MVC Implementation

The application uses `CustomerModel` and `UserModel` to retrieve database records through CodeIgniter's `findAll()` method.

The controllers pass the retrieved records to their respective views, where they are displayed in HTML tables.

## Project Information

Course: IT0049 - Web System Technologies

Assessment: Technical Formative Assessment 2

Project: From Arrays to a Real Database

## Hosted Application

Hosted URL: To be added after deployment.