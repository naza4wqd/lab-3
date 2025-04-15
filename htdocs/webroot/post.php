<article class="post">
    <div class="post-meta">
        <span class="date"><?php echo $post['created']; ?></span>
        <h2><?php echo $post['title']; ?></h2>
    </div>
    <img src="<?php echo $post['image']; ?>" alt="Post Image">
    <p><?php echo $post['content']; ?></p>
    <div class="post-footer">
        <span>POSTED BY <?php echo $post['author']; ?></span>
        <span class="comments"><?php echo $post['comments']; ?> COMMENT</span>
    </div>
</article>
