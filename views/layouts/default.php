<!DOCTYPE html>
<html>
<head>
    <title><?php echo isset($title) ? $title : 'My MVC App'; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
</head>
<body>
    <header>
        <h1>My MVC Application</h1>
        <nav>
            <a href="<?php echo BASE_URL; ?>/">Home</a> |
            <a href="<?php echo BASE_URL; ?>/posts">Blog Posts</a>
        </nav>
    </header>
    
    <main>
        <?php echo $content; ?>
    </main>
    
    <footer>
        <p>&copy; <?php echo date('Y'); ?> My MVC App</p>
    </footer>
</body>
</html> 