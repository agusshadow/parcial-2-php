#uso la db ps_digital

USE ps_digital;

#borrar db (si es necesario)

DROP DATABASE ps_digital;

#inserto los tipos de plataformas en la db

INSERT INTO plataforma
VALUES (null, "ps4");

INSERT INTO plataforma
VALUES (null, "ps5");

SELECT * FROM plataforma;

#inserto los tipos de productos en la db

INSERT INTO tipos
VALUES (null, "juego");

INSERT INTO tipos
VALUES (null, "subscripcion");

SELECT * FROM tipos;

#inserto productos en la db

INSERT INTO productos
VALUES (null, "fifa 22", 7900, "portada-fifa-22.png", "imagen portada fifa 22 para ps4", "descripcion para agregar", "https://www.youtube.com/embed/o1igaMv46SY", NOW(), 1, 1);

INSERT INTO productos
VALUES (null, "farcry 6", 10500, "portada-farcry-6.png", "imagen portada farcry 6 para ps5", "descripcion para agregar", "https://www.youtube.com/embed/tSDMwngdkF4", NOW(), 1, 2);

INSERT INTO productos
VALUES (null, "PS Plus (1 año)", 8000, "ps-plus.png", "imagen subscripcion a ps plus por un año", "descripcion para agregar", "https://www.youtube.com/embed/vFlRCL5o27k", NOW(), 2, 2);

SELECT * FROM productos;

DELETE FROM productos WHERE id_producto = 1;

