-   fix id in the register

SELECT 
    me.third_data_id AS Id,
    td.nit AS Nit,
    td.number_phone AS Telefono,
    etv.name AS Tipo,
    td.email AS Email,
    td.business_name AS Nombre,
    td.address AS Dirección,
    sv.name AS Estado
FROM
    medical_entities AS me,
    third_data AS td,
    entity_type_views AS etv,
    statu_views AS sv
WHERE
    (td.data_id = me.third_data_id)
        AND (td.entity_type_id = etv.detail_id)
        AND (td.statu_type_id = sv.detail_id);