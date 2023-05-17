SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE usuario (
  dni VARCHAR(9) PRIMARY KEY,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  direccion VARCHAR(50),
  tipo VARCHAR(50)
);

CREATE TABLE articulo (
  id SERIAL PRIMARY KEY,
  dni_autor VARCHAR(9),
  titulo TEXT,
  descripcion TEXT,
  FOREIGN KEY (dni_autor) REFERENCES usuario(dni)
);

INSERT INTO usuario (dni, nombre, apellido, direccion, tipo)
VALUES ('71560895Y', 'Adrian', 'Justino', 'Calle Cualquiera', 'Investigador');

