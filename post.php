<?php
include_once 'functions.php';

$posts = get_posts();
$post_id = isset($_GET['article']) ? (int)$_GET['article'] : 0;
$post = null;

// Найти пост по ID
foreach ($posts as $p) {
    if ($p['id'] === $post_id) {
        $post = $p;
        break;
    }
}

// Если пост не найден, показать сообщение
if (!$post) {
    http_response_code(404);
    echo '<main><p>Post not found.</p></main>';
    include 'footer.php';
    exit;
}
?>

<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<main>
    <?php include 'article.php';?>
</main>

<?php include 'footer.php'; ?>