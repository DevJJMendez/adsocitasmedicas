<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void
    {
        DB::statement(
            'CREATE VIEW `priorities_view` AS
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
                `h`.`header_id` = 7;
                '
        );
    }
    public function down(): void
    {
        Schema::dropIfExists('priorities_view');
    }
};
