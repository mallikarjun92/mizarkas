<?php
$pageName = 'Welcome to Mizarkas';

require_once('./includes/page_title.php');
require_once('./includes/db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('./includes/head.php'); ?>
    <title><?php echo $title ?></title>
</head>
<body>
    <h1>Home Page</h1>
    <!-- include the navbar section below -->
    <?php include_once('./includes/nav_bar.php'); ?>

    <!-- main content below -->
    <?php include_once('./includes/main.php'); ?>

    <!-- include footer below -->
    <?php include_once('./includes/footer.php'); ?>
</body>
</html>