CREATE TABLE articles (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    content TEXT(65000) NOT NULL,
    created_at DATETIME NOT NULL,
    category_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id)
)

CREATE TABLE categories (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)

CREATE TABLE articles_categories (
    articles_id INT UNSIGNED NOT NULL,
    categories_id INT UNSIGNED NOT NULL,  
    PRIMARY KEY (articles_id, categories_id),
    CONSTRAINT fk_articles
        FOREIGN KEY (articles_id)
        REFERENCES articles (id)
        ON DELETE CASCADE 
        ON UPDATE RESTRICT,
    CONSTRAINT fk_categories
        FOREIGN KEY (categories_id)
        REFERENCES categories (id)
        ON DELETE CASCADE 
        ON UPDATE RESTRICT
)

CREATE TABLE user (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)