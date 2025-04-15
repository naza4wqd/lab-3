<?php
include 'functions.php';
include 'head.php';
include 'header.php';
?>

<main>
    <?php
    $posts = get_posts();
    foreach ($posts as $post) {
        include 'post.php';
    }
    ?>
</main>

<?php include 'footer.php'; ?>
