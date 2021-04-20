CREATE TABLE tweets (
  id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_id INT UNSIGNED NOT NULL,
  content VARCHAR(140) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);