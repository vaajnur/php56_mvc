<div class="posts">
    <h2>Blog Posts</h2>
    
    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <article class="post">
                <h3>
                    <a href="<?php echo BASE_URL . '/posts/view?id=' . $post['id']; ?>">
                        <?php echo htmlspecialchars($post['title']); ?>
                    </a>
                </h3>
                <div class="meta">
                    Posted on: <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                </div>
                <div class="excerpt">
                    <?php echo htmlspecialchars(substr($post['content'], 0, 200)) . '...'; ?>
                </div>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div> 