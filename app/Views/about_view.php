<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About | POS Foundations</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; color: #1f2937; background: #f3f6fb; }
        nav { display: flex; flex-wrap: wrap; gap: 1.25rem; padding: 1rem max(1rem, calc((100% - 960px) / 2)); background: #12304a; }
        nav a { color: #fff; text-decoration: none; font-weight: 600; }
        nav a:hover, nav a:focus { text-decoration: underline; }
        main { max-width: 900px; margin: 4rem auto; padding: 0 1.25rem; }
        .panel { padding: 3rem; border-radius: 12px; background: #fff; box-shadow: 0 8px 28px #12304a12; }
        h1 { margin-top: 0; color: #12304a; }
        p { line-height: 1.7; }
    </style>
</head>
<body>
    <nav aria-label="Main navigation">
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customers</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </nav>
    <main>
        <section class="panel">
            <h1>About This POS Project</h1>
            <p>This project is a foundation for a point-of-sale system built with CodeIgniter 4. It introduces page routing, controllers, and views, with customer and staff account examples displayed from static PHP arrays.</p>
            <p>The sample records are temporary demonstration data. No database connection is needed for these four pages.</p>
        </section>
    </main>
</body>
</html>
