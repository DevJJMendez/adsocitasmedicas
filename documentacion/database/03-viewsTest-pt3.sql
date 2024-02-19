CREATE VIEW vista_estado AS
    SELECT 
        e.pk_id_encabezado AS id_estado,
        d.pk_id_detalle AS id_detalle,
        d.valor AS estado,
        d.abreviatura as abreviatura
    FROM
        `encabezado` AS `e`
            JOIN
        `detalle` AS `d` ON `e`.`pk_id_encabezado` = `d`.`fk_id_encabezado`
    WHERE
        `e`.`pk_id_encabezado` = '1';



CREATE VIEW `vista_genero` AS
    SELECT 
        e.pk_id_encabezado AS `id_genero`,
        d.pk_id_detalle AS `id_detalle`,
        d.valor AS `genero`,
        d.abreviatura AS `abreviatura`
    FROM
        `encabezado` as `e`
            JOIN
        `detalle` as `d` ON `e`.`pk_id_encabezado` = `d`.`fk_id_encabezado`
    WHERE
        `e`.`pk_id_encabezado` = '2';




CREATE VIEW vista_tipoDocumento AS
    SELECT 
        e.pk_id_encabezado AS `id_tipo_documento`,
        d.pk_id_detalle AS `id_detalle`,
        d.valor AS `tipo_documento`,
        d.abreviatura as `abreviatura`
    FROM
        `encabezado` as `e`
            JOIN
        `detalle` as `d` 
        ON e.pk_id_encabezado = d.fk_id_encabezado
    WHERE
        e.pk_id_encabezado = '3';
        


CREATE VIEW vista_rol AS
    SELECT 
        e.pk_id_encabezado AS id_rol,
        d.pk_id_detalle AS id_detalle,
        d.valor AS rol
    FROM
        `encabezado` AS `e`
            JOIN
        `detalle` AS `d` ON `e`.`pk_id_encabezado` = `d`.`fk_id_encabezado`
    WHERE
        `e`.`pk_id_encabezado` = '4';
select * from vista_rol;

CREATE VIEW vista_tipoContacto AS
    SELECT 
        e.pk_id_encabezado AS id_tipoContacto,
        d.pk_id_detalle AS id_detalle,
        d.valor AS tipoContacto
    FROM
        `encabezado` AS `e`
            JOIN
        `detalle` AS `d` ON `e`.`pk_id_encabezado` = `d`.`fk_id_encabezado`
    WHERE
        `e`.`pk_id_encabezado` = '5';
        


CREATE VIEW vista_tipoEntidad AS
    SELECT 
        e.pk_id_encabezado AS id_tipoEntidad,
        d.pk_id_detalle AS id_detalle,
        d.valor AS tipoEntidad
    FROM
        `encabezado` AS `e`
            JOIN
        `detalle` AS `d` ON `e`.`pk_id_encabezado` = `d`.`fk_id_encabezado`
    WHERE
        `e`.`pk_id_encabezado` = '6';
        
select * from vista_tipoEntidad;

CREATE VIEW vista_tipoCorreo AS
    SELECT 
        e.pk_id_encabezado AS id_tipoCorreo,
        d.pk_id_detalle AS id_detalle,
        d.valor AS tipoCorreo
    FROM
        `encabezado` AS `e`
            JOIN
        `detalle` AS `d` ON `e`.`pk_id_encabezado` = `d`.`fk_id_encabezado`
    WHERE
        `e`.`pk_id_encabezado` = '7';
        


CREATE VIEW vista_prioridad AS
    SELECT 
        e.pk_id_encabezado AS id_prioridad,
        d.pk_id_detalle AS id_detalle,
        d.valor AS prioridad
    FROM
        `encabezado` AS `e`
            JOIN
        `detalle` AS `d` ON `e`.`pk_id_encabezado` = `d`.`fk_id_encabezado`
    WHERE
        `e`.`pk_id_encabezado` = '8';
        
select * from status_view;
select * from priorities_view;
select * from mailtypes_view;
select * from genders_view;
select * from entitytypes_view;
select * from documenttypes_view;
select * from contacttypes_view;








use sys;
drop database adsocitasmedicas;

create DATABASE adsocitasmedicas;
use adsocitasmedicas;

SELECT 
    data_id,
    nit,
    number_phone,
    business_name,
    mail,
    entity_type_id,
    address,
    statu_id
FROM
    thirddatas;
select * from users;
select * from headers;
select * from details;
select * from medical_entities;
select * from professions;
SELECT 
    t.data_id AS id,
    t.document_id AS document_id,
    d.`value` AS document_type,
    t.identification_number AS document_number,
    t.first_name AS `name`,
    t.second_name AS `last_name`,
    t.sur_name AS `second_name`,
    t.second_sur_name AS `second_sur_name`,
    t.number_phone AS phone,
    t.mail AS mail,
    t.gender_id AS gender_id,
    d.`value` AS gender,
    t.address AS address,
    t.statu_id AS statu_id,
    d.`value` AS statu_name
FROM
    thirddatas AS t, details AS d
WHERE
    t.data_id = d.id_header;


use adsocitasmedicas;


select * from headers;
select * from details;

SELECT 
    h.header_id AS ID, h.key AS clave, d.value AS valor
FROM
    headers AS h
        INNER JOIN
    details AS d ON h.header_id = d.id_header;
    
select h.header_id as id, h.key as llave from headers as h;