create database bienesraices;

use bienesraices;

create table vendedores(
    id int UNSIGNED auto_increment primary key,
    nombre varchar(255) not null,
    email varchar(255) not null unique,
    phone varchar(20) not null
);

create table propiedades (
    id int UNSIGNED auto_increment primary key,
    titulo varchar(255) not null,
    precio decimal(10, 2) not null,
    imagen varchar(255) not null,
    descripcion text not null,
    num_rooms int not null,
    num_wc int not null,
    num_garage int not null,
    created date not null
);

create table propiedades_vendidas (
    vendedores_id int UNSIGNED not null,
    propiedades_id int UNSIGNED not null,
    fecha date not null,
    foreign key (vendedores_id) references vendedores(id),
    foreign key (propiedades_id) references propiedades(id)
);

insert into vendedores (nombre, email, phone) VALUES
('Maximus Meridus', 'maximus.meridus@example.com', '123-456-7890'),
('Jonathan Doe', 'jonathan.doe@example.com', '098-765-4321'),
('Jane Smith', 'jane.smith@example.com', '555-555-5555'),
('Alex Johnson', 'alex.johnson@example.com', '678-678-6789'),
('Emily Brown', 'emily.brown@example.com', '999-999-9999');

insert into propiedades (titulo, precio, imagen, descripcion, num_rooms, num_wc, num_garage, created) VALUES
('Casa en la playa', 300000, 'casa1.jpg', 'Casa en la playa con vista al mar', 3, 2, 2, '2024-01-01'),
('Casa en la montaña', 250000, 'casa2.jpg', 'Casa en la montaña con vista a la ciudad', 4, 3, 2, '2024-02-01'),
('Casa en el campo', 180000, 'casa3.jpg', 'Casa en el campo con vista a la naturaleza', 5, 4, 3, '2024-03-01'),
('Casa en la ciudad', 220000, 'casa4.jpg', 'Casa en la ciudad con vista a la ciudad', 3, 2, 2, '2024-04-01'),
('Casa en el bosque', 280000, 'casa5.jpg', 'Casa en el bosque con vista a la naturaleza', 6, 5, 4, '2024-05-01');

insert into propiedades_vendidas (vendedores_id, propiedades_id, fecha) VALUES
(1, 1, '2024-01-01'),
(2, 2, '2024-02-01'),
(3, 3, '2024-03-01'),
(4, 4, '2024-04-01'),
(5, 5, '2024-05-01');


SELECT
    v.nombre,
    COUNT(p.id) AS propiedades_vendidas
FROM
    vendedores AS v
INNER JOIN
    propiedades_vendidas AS pv ON v.id = pv.vendedores_id
INNER JOIN
    propiedades AS p ON pv.propiedades_id = p.id
GROUP BY
    v.nombre;


