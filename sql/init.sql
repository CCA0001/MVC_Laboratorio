CREATE TABLE IF NOT EXISTS animales (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    especie VARCHAR(100) NOT NULL,
    edad INT
);

INSERT INTO animales (nombre, especie, edad) VALUES
('Alex', 'Panthera leo', 5),
('Melman', 'Giraffa', 3),
('Skipper', 'Spheniscus', 2);