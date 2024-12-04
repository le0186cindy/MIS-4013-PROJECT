<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<html lang="en">
<?php
    include 'components/head.php';
?>
<body>

<?php
    include 'components/navbar.php';
    include 'components/mainbody.php';
    include 'components/carousel.php';
    include 'components/cards.php';
?>

</body>

<?php
    include 'components/footer.php';
?>
</html>