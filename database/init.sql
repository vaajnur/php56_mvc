CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO posts (title, content) VALUES 
('First Blog Post', 'This is the content of our first blog post. Here we can write a longer description about whatever topic we want to cover.'),
('Getting Started with PHP MVC', 'In this post, we''ll explore how to build a simple MVC framework using PHP. We''ll cover routing, controllers, models, and views.'),
('Working with Databases', 'Learn how to integrate MySQL with PHP using PDO. We''ll discuss best practices for database connections and queries.'),
('Docker Development Environment', 'Setting up a development environment with Docker can make your life easier. Here''s how to containerize your PHP application.');

-- Create user 'aaa' with an empty password
CREATE USER 'aaa'@'%' IDENTIFIED BY '';
GRANT ALL PRIVILEGES ON php_mvc.* TO 'aaa'@'%';
FLUSH PRIVILEGES; 