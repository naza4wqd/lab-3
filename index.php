<?php
include_once 'functions.php';
$posts = get_posts();
?>

<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<main>
    <?php
    foreach ($posts as $post) {
        include 'article.php';
    }
    ?>
</main>

<?php include 'footer.php'; ?>