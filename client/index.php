<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "components/header.php";
?>

<main>
    <?php include 'config/router.php'?>
</main>

<?php require_once "components/footer.php"; ?>