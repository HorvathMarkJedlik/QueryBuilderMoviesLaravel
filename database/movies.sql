BEGIN TRANSACTION;

DROP TABLE IF EXISTS "movies";
CREATE TABLE "movies" (
	"id" INTEGER,
	"title" TEXT NOT NULL,
	"director" TEXT NOT NULL,
	"release_year" INTEGER NOT NULL,
	"rating" REAL NOT NULL,
	"created_at" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	"updated_at" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	"genre_id" INTEGER,
	PRIMARY KEY("id" AUTOINCREMENT),
	FOREIGN KEY("genre_id") REFERENCES "genres"("id")
);

DROP TABLE IF EXISTS "genres";
CREATE TABLE "genres" (
	"id" INTEGER,
	"name" TEXT NOT NULL UNIQUE,
	"created_at" DATETIME DEFAULT CURRENT_TIMESTAMP,
	"updated_at" DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY("id" AUTOINCREMENT)
);

INSERT INTO "genres" VALUES (1, 'Action', '2024-11-18 15:59:40', '2024-11-18 15:59:40');
INSERT INTO "genres" VALUES (2, 'Drama', '2024-11-18 15:59:40', '2024-11-18 15:59:40');
INSERT INTO "genres" VALUES (3, 'Comedy', '2024-11-18 15:59:40', '2024-11-18 15:59:40');
INSERT INTO "genres" VALUES (4, 'Horror', '2024-11-18 15:59:40', '2024-11-18 15:59:40');
INSERT INTO "genres" VALUES (5, 'Science Fiction', '2024-11-18 15:59:40', '2024-11-18 15:59:40');

INSERT INTO "movies" VALUES (1, 'The Shawshank Redemption', 'Frank Darabont', 1994, 9.3, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 2);
INSERT INTO "movies" VALUES (2, 'The Godfather', 'Francis Ford Coppola', 1972, 9.2, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 2);
INSERT INTO "movies" VALUES (3, 'The Dark Knight', 'Christopher Nolan', 2008, 9.0, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 1);
INSERT INTO "movies" VALUES (4, 'Pulp Fiction', 'Quentin Tarantino', 1994, 8.9, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 2);
INSERT INTO "movies" VALUES (5, 'Schindler\s' 'List', 'Steven Spielberg', 1993, 8.9, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 2);
INSERT INTO "movies" VALUES (6, 'Inception', 'Christopher Nolan', 2010, 8.8, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 5);
INSERT INTO "movies" VALUES (7, 'Fight Club', 'David Fincher', 1999, 8.8, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 2);
INSERT INTO "movies" VALUES (8, 'Forrest Gump', 'Robert Zemeckis', 1994, 8.8, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 3);
INSERT INTO "movies" VALUES (9, 'The Matrix', 'The Wachowskis', 1999, 8.7, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 5);
INSERT INTO "movies" VALUES (10, 'Goodfellas', 'Martin Scorsese', 1990, 8.7, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 2);
INSERT INTO "movies" VALUES (11, 'The Silence of the Lambs', 'Jonathan Demme', 1991, 8.6, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 4);
INSERT INTO "movies" VALUES (12, 'Interstellar', 'Christopher Nolan', 2014, 8.6, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 5);
INSERT INTO "movies" VALUES (13, 'Se7en', 'David Fincher', 1995, 8.6, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 4);
INSERT INTO "movies" VALUES (14, 'The Green Mile', 'Frank Darabont', 1999, 8.6, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 2);
INSERT INTO "movies" VALUES (15, 'Star Wars: Episode IV - A New Hope', 'George Lucas', 1977, 8.6, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 5);
INSERT INTO "movies" VALUES (16, 'The Prestige', 'Christopher Nolan', 2006, 8.5, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 5);
INSERT INTO "movies" VALUES (17, 'The Lion King', 'Roger Allers & Rob Minkoff', 1994, 8.5, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 3);
INSERT INTO "movies" VALUES (18, 'Gladiator', 'Ridley Scott', 2000, 8.5, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 1);
INSERT INTO "movies" VALUES (19, 'The Departed', 'Martin Scorsese', 2006, 8.5, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 2);
INSERT INTO "movies" VALUES (20, 'Whiplash', 'Damien Chazelle', 2014, 8.5, '2024-11-18 15:41:48', '2024-11-18 15:41:48', 2);

COMMIT;
