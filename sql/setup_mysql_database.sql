USE manga;

DROP TABLE IF EXISTS tb_vocab;
DROP TABLE IF EXISTS tb_manga_context;
DROP TABLE IF EXISTS tb_manga_tags;
DROP TABLE IF EXISTS tb_tags;
DROP TABLE IF EXISTS tb_manga;

CREATE TABLE  tb_manga(
    manga INT NOT NULL AUTO_INCREMENT,
    image INT,
    english_title VARCHAR(50) NOT NULL,
    korean_title VARCHAR(50) NOT NULL,
    source VARCHAR(200),
    english_description VARCHAR(1000),
    korean_description VARCHAR(1000),
    rating INT,
    PRIMARY KEY (manga)
);

CREATE TABLE tb_tags(
    tags INT NOT NULL AUTO_INCREMENT,
    english_tag VARCHAR(50) NOT NULL,
    korean_tag VARCHAR(50) NOT NULL,
    PRIMARY KEY (tags)
);

CREATE TABLE tb_manga_tags(
    manga_tags INT NOT NULL AUTO_INCREMENT,
    manga INT NOT NULL,
    tags INT NOT NULL,
    PRIMARY KEY (manga_tags),
    FOREIGN KEY (manga) REFERENCES tb_manga(manga),
    FOREIGN KEY (tags) REFERENCES tb_tags(tags)
);

CREATE TABLE tb_manga_context(
    manga_context INT NOT NULL AUTO_INCREMENT,
    manga INT NOT NULL,
    path VARCHAR(50),
    image VARCHAR(100),
    meaning VARCHAR(400),
    context VARCHAR(400),
    translation VARCHAR(400),
    PRIMARY KEY (manga_context),
    FOREIGN KEY (manga) REFERENCES tb_manga(manga)
);

CREATE TABLE tb_vocab(
    vocab INT NOT NULL AUTO_INCREMENT,
    manga_context INT,
    english VARCHAR(75) NOT NULL,
    korean VARCHAR(75) NOT NULL,
    english_definition VARCHAR(400),
    korean_definition VARCHAR(400),
    PRIMARY KEY (vocab),
    FOREIGN KEY (manga_context) REFERENCES tb_manga_context(manga_context)
);
