CREATE TABLE IF NOT EXISTS saved_items (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    item_id VARCHAR(100) NOT NULL,
    country_code CHAR(3) NOT NULL,
    item_type ENUM ('Country', 'Site') NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY user_item (user_id, item_id),
    CONSTRAINT saved_user FOREIGN KEY (user_id) REFERENCES users(id)
    on DELETE CASCADE)
    ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 
    COLLATE = utf8mb4_unicode_ci;
