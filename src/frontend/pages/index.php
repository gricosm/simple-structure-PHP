<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<head>
<title>Simple Structure PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma-rtl.min.css">
</head>

<body>

    <?php require_once '../components/header.php'; ?>

    <main class="content">
        <?php 
            ini_set('display_errors', "1");
            ini_set('display_startup_errors', "1");
            error_reporting(E_ALL);
            include_once '../components/tabla.php'; 
        ?>
    </main>

    <?php include_once '../components/footer.php'; ?>

</body>