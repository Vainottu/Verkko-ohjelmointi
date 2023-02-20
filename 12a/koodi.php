CREATE TABLE kategoriat (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    kategoria_nimi VARCHAR(50),
    luotu TIMESTAMP DEFAULT NOW()
);

CREATE TABLE tuotteet (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    kategoria_id int,
    tuote_nimi VARCHAR(50),
    tuote_hinta DECIMAL(10,2),
    tuote_lisatieto TEXT,
    tuote_kuva VARCHAR(100),
    luotu TIMESTAMP DEFAULT NOW(),
    FOREIGN KEY (kategoria_id) REFERENCES kategoriat(id)
);

INSERT INTO kategoriat (kategoria_nimi) VALUES ('Lautapelit');
INSERT INTO kategoriat (kategoria_nimi) VALUES ('PC-pelit');
INSERT INTO kategoriat (kategoria_nimi) VALUES ('Konsolipelit');
INSERT INTO kategoriat (kategoria_nimi) VALUES ('Mobiilipelit');

INSERT INTO tuotteet (kategoria_id, tuote_nimi, tuote_hinta, tuote_lisatieto, tuote_kuva) 
VALUES (1, 'Lautapeli 1', '23.50', 'Nyt jos koskaan kannattaa ostaa lautapeli. Peli on tehty melkein oksattomasta kotimaisesta (kiina) mäntylaudasta. Peli on <b>yksinkertainen</b> oppia!', 'lautapeli.jpg');
INSERT INTO tuotteet (kategoria_id, tuote_nimi, tuote_hinta, tuote_lisatieto) VALUES (1, 'Lautapeli 2', '13.50', 'ei lisätietoja');
INSERT INTO tuotteet (kategoria_id, tuote_nimi, tuote_hinta, tuote_lisatieto) VALUES (1, 'Lautapeli 3', '23.50', 'ei lisätietoja');
INSERT INTO tuotteet (kategoria_id, tuote_nimi, tuote_hinta, tuote_lisatieto) VALUES (2, 'PC-peli 1', '1.50', 'ei lisätietoja');
INSERT INTO tuotteet (kategoria_id, tuote_nimi, tuote_hinta, tuote_lisatieto) VALUES (2, 'PC-peli 2', '41.50', 'ei lisätietoja');
INSERT INTO tuotteet (kategoria_id, tuote_nimi, tuote_hinta, tuote_lisatieto) VALUES (3, 'Konsolipeli 1', '33.50', 'ei lisätietoja');
INSERT INTO tuotteet (kategoria_id, tuote_nimi, tuote_hinta, tuote_lisatieto) VALUES (4, 'Mobiilipeli 1', '2.00', 'ei lisätietoja');
INSERT INTO tuotteet (kategoria_id, tuote_nimi, tuote_hinta, tuote_lisatieto) VALUES (4, 'Mobiilipeli 2', '2.00', 'ei lisätietoja');