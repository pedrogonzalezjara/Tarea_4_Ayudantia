
CREATE TABLE bodega (
    id serial NOT NULL,
    nombre_bodega varchar(255) NOT NULL,
    codigo_bodega varchar(255) NOT NULL,
    UNIQUE (codigo_bodega),
    PRIMARY KEY (id)
);

CREATE TABLE productos (
    id serial NOT NULL,
    fk_bodega_id serial NOT NULL REFERENCES bodega(id) ON UPDATE CASCADE ON DELETE CASCADE,
    nombre_producto varchar(255) NOT NULL,
    codigo_producto varchar(255) NOT NULL,
    precio_neto varchar(255) NOT NULL,
    UNIQUE(codigo_producto),
    PRIMARY KEY (id)
);

