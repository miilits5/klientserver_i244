CREATE TABLE ttihhano_loomaaed (id integer PRIMARY KEY auto_increment, nimi varchar(50), vanus integer, liik varchar(50), puur integer); 

INSERT INTO ttihhano_loomaaed (nimi, vanus, liik, puur) VALUES ('Kurr', 3, 'kaslane', 3), ('Koer', 3, 'koerlane', 4), ('Nurmar', 10, 'eksootiline', 5), ('Kalar', 25, 'eksootiline', 5), ('Muki', 10, 'koerlane', 4), ('Miranda', 2, 'vasikaline', 1); 

SELECT nimi, puur FROM ttihhano_loomaaed WHERE puur=5;

SELECT * FROM ttihhano_loomaaed WHERE vanus IN (SELECT MAX(vanus) FROM ttihhano_loomaaed);

SELECT * FROM ttihhano_loomaaed WHERE vanus IN (SELECT MIN(vanus) FROM ttihhano_loomaaed);

SELECT COUNT(id), puur FROM ttihhano_loomaaed GROUP BY puur ORDER BY COUNT(puur) desc;

UPDATE ttihhano_loomaaed SET vanus = vanus +1;