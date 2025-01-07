<article class="post">
    <h2><?php echo htmlspecialchars($post['title']); ?></h2>
    
    <div class="meta">
        Posted on: <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
    </div>
    
    <div class="content">
        <?php echo nl2br(htmlspecialchars($post['content'])); ?>
    </div>
    
    <p><a href="<?php echo BASE_URL; ?>/posts">&laquo; Back to Posts</a></p>
</article> 