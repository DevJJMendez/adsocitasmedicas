<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('DROP VIEW IF EXISTS statu_views');
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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statu_views');
    }
};
