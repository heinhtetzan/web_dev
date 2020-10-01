<?php require_once "core/auth.php"; ?>
<?php include "template/header.php"; ?>

    <h1>This is Dashboard Page</h1>
    <?php print_r($_SESSION['user']) ?>

<?php echo $url; ?>/assets/img/<?php echo $_SESSION['user']['photo']; ?>

<?php include "template/footer.php"; ?>