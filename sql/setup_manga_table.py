import sqlite3 as lite
import sys

con = None

con = lite.connect( 'learning_korean.db' )

with con:
    cur = con.cursor()

    manga_table = """CREATE TABLE tb_manga(
                    manga               INTEGER   NOT NULL    PRIMARY KEY AUTOINCREMENT,
                    image               TEXT,
                    english_title       TEXT,
                    korean_title        TEXT,
                    source              TEXT,
                    english_description TEXT,
                    korean_description  TEXT,
                    rating              INTEGER
                    )"""

    tags_table = """CREATE TABLE tb_tags(
                    tags        INTEGER   NOT NULL    PRIMARY KEY AUTOINCREMENT,
                    english_tag TEXT,
                    korean_tag  TEXT
                    )"""

    manga_tags_table = """CREATE TABLE tb_manga_tags(
                    manga_tags        INTEGER   NOT NULL    PRIMARY KEY AUTOINCREMENT,
                    manga INTEGER,
                    tags  INTEGER,
                    FOREIGN KEY(manga) REFERENCES tb_manga(manga),
                    FOREIGN KEY(tags) REFERENCES tb_tags(tags)
                    )"""

    manga_context_table = """CREATE TABLE tb_manga_context(
                             manga_context INTEGER   NOT NULL    PRIMARY KEY AUTOINCREMENT,
                             manga         INTEGER,
                             path          TEXT,
                             image         TEXT,
                             meaning       TEXT,
                             context       TEXT,
                             translation   TEXT,
                             FOREIGN KEY(manga) REFERENCES tb_manga(manga)
                             )"""

    vocab_table = """CREATE TABLE tb_vocab(
                     vocab              INTEGER   NOT NULL    PRIMARY KEY AUTOINCREMENT,
                     manga_context      INTEGER,
                     english            TEXT,
                     korean             TEXT,
                     english_definition TEXT,
                     korean_definition  TEXT,
                     FOREIGN KEY(manga_context) REFERENCES tb_manga(manga_context)
                     )"""

    cur.execute( manga_table )
    cur.execute( tags_table )
    cur.execute( manga_tags_table )
    cur.execute( manga_context_table )
    cur.execute( vocab_table )
    cur.close()
