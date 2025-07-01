CREATE TABLE phones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    photo VARCHAR(255)
);

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_id INT NOT NULL,
    name VARCHAR(100),
    review TEXT,
    rating INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (phone_id) REFERENCES phones(id) ON DELETE CASCADE
);
