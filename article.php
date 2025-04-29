<article class="post">
    <div class="post-meta">
        <span class="date"><?= $post['created']; ?></span>
        <h2><a href="post.php?article=<?= $post['id']; ?>"><?= $post['title']; ?></a></h2>
    </div>
    <img src="<?= $post['image']; ?>" alt="<?= $post['title']; ?>">
    <p><?= $post['content']; ?></p>
    <div class="post-footer">
        <span>By <?= $post['author']; ?></span>
        <span class="comments"><?= $post['comments']; ?> Comment<?= $post['comments'] != 1 ? 's' : ''; ?></span>
    </div>
</article>