- En el registro de médicos, a la hora de seleccionar el documento de indentidad, no debe mostrar tarjeta de indentidad ya que los medicos deben ser mayores de edad.

# Jeison Carcamo:

- Haces una vista para el registro de citas, nada de calendario, solamente un formulario para registrar la cita 
- Haces una vista donde muestres el calendario con las citas que tiene el usuario


- contexto para prompt:

Me he decidido por crear un horario de trabajo para los medicos, ayudame a modelar la tabla schedule y los campos que necesita esta, por otro lado te enseñare la estructura de base de datos de mi sistema medico, y algunas cosas a entender:

Con el fin de normalizar la base de datos lo mas posible se crearon estas dos tablas de las cuales se crean vistas que contienen informacion comun que comparten todos los usuarios (medicos y pacientes)
apartir de estas dos tablas:

Schema::create('headers', function (Blueprint $table) {
            $table->tinyIncrements('header_id')->unsigned();
            $table->string('key', 30);
            $table->timestamps();
        });
Schema::create('details', function (Blueprint $table) {
            $table->tinyIncrements('detail_id')->unsigned();
            $table->unsignedTinyInteger('id_header');
            $table->foreign('id_header')->references('header_id')->on('headers');
            $table->string('value', 40);
            $table->string('nomenclature', 4)->nullable();
            $table->timestamps();
        });
DB::statement(
            'CREATE VIEW `document_type_views` AS
            SELECT
                h.header_id AS `document_id`,
                d.detail_id AS `detail_id`,
                d.value AS `name`,
                d.nomenclature AS `nomenclature`
            FROM
                `headers` AS `h`
                JOIN
                `details` AS `d`
                ON
                `h`.`header_id` = `d`.`id_header`
                WHERE
                `h`.`header_id` = 3;
                '
        );
DB::statement(
            'CREATE VIEW `gender_views` AS
            SELECT
                h.header_id AS `gender_id`,
                d.detail_id AS `detail_id`,
                d.value AS `name`,
                d.nomenclature AS `nomenclature`
            FROM
                `headers` AS `h`
                JOIN
                `details` AS `d`
                ON
                `h`.`header_id` = `d`.`id_header`
                WHERE
                `h`.`header_id` = 2;
                '
        );
DB::statement(
            'CREATE VIEW `statu_views` AS
            SELECT
                h.header_id AS `statu_id`,
                d.detail_id AS `detail_id`,
                d.value AS `name`,
                d.nomenclature AS `nomenclature`
            FROM
                `headers` AS `h`
                JOIN
                `details` AS `d`
                ON
                `h`.`header_id` = `d`.`id_header`
                WHERE
                `h`.`header_id` = 1;
                '
        );
DB::statement(
            'CREATE VIEW `entity_type_views` AS
            SELECT
                h.header_id AS `entity_id`,
                d.detail_id AS `detail_id`,
                d.value AS `name`,
                d.nomenclature AS `nomenclature`
            FROM
                `headers` AS `h`
                JOIN
                `details` AS `d`
                ON
                `h`.`header_id` = `d`.`id_header`
                WHERE
                `h`.`header_id` = 4;
                '
        );
class HeaderSeeder extends Seeder
{
    public function run(): void
    {
        Header::create([
            'key' => 'Estado',
        ]);
        Header::create([
            'key' => 'Genero',
        ]);
        Header::create([
            'key' => 'Tipo de documento',
        ]);
        Header::create([
            'key' => 'Tipo de contacto',
        ]);
        Header::create([
            'key' => 'Tipo de entidad',
        ]);
        Header::create([
            'key' => 'Tipo de correo',
        ]);
        Header::create([
            'key' => 'Prioridad',
        ]);
    }
}
class DetailSeeder extends Seeder
{
    public function run(): void
    {
        Detail::create([
            'id_header' => 1,
            'value' => 'Activo',
            'nomenclature' => 'ACT',
        ]);
        Detail::create([
            'id_header' => 1,
            'value' => 'Inactivo',
            'nomenclature' => 'INAC',
        ]);
        Detail::create([
            'id_header' => 1,
            'value' => 'En Espera',
            'nomenclature' => 'EESP',
        ]);
        Detail::create([
            'id_header' => 1,
            'value' => 'Atendida',
            'nomenclature' => 'ATDA',
        ]);
        Detail::create([
            'id_header' => 1,
            'value' => 'Cancelada',
            'nomenclature' => 'CANC',
        ]);

        Detail::create([
            'id_header' => 2,
            'value' => 'Masculino',
            'nomenclature' => 'M',
        ]);
        Detail::create([
            'id_header' => 2,
            'value' => 'Femenino',
            'nomenclature' => 'F',
        ]);

        Detail::create([
            'id_header' => 3,
            'value' => 'Cedula de Ciudadania',
            'nomenclature' => 'CC',
        ]);
        Detail::create([
            'id_header' => 3,
            'value' => 'Tarjeta de Identidad',
            'nomenclature' => 'TI',
        ]);
        Detail::create([
            'id_header' => 3,
            'value' => 'Registro Civil',
            'nomenclature' => 'RC',
        ]);
        Detail::create([
            'id_header' => 3,
            'value' => 'Cedula de Extranjeria',
            'nomenclature' => 'CE',
        ]);
        Detail::create([
            'id_header' => 4,
            'value' => 'EPS',
            'nomenclature' => null,
        ]);
        Detail::create([
            'id_header' => 4,
            'value' => 'IPS',
            'nomenclature' => null,
        ]);
    }
}