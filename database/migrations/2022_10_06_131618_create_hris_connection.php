<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $configs = config('database.hris');

        DB::statement('CREATE EXTENSION IF NOT EXISTS  tds_fdw;');
        DB::statement("
            CREATE SERVER IF NOT EXISTS  hris
	            FOREIGN DATA WRAPPER tds_fdw
	            OPTIONS (servername '{$configs['host']}', port '{$configs['port']}', database '{$configs['database']}', tds_version '7.3');
        ");
        DB::statement("
            CREATE USER MAPPING IF NOT EXISTS  FOR sail
	            SERVER hris
	            OPTIONS (username '{$configs['username']}', password '{$configs['password']}');
        ");

        DB::statement('DROP SCHEMA IF EXISTS public_hris CASCADE;');
        DB::statement(('CREATE SCHEMA public_hris AUTHORIZATION sail;'));
        DB::statement("
            IMPORT FOREIGN SCHEMA dbo
                EXCEPT (mssql_table)
                FROM SERVER hris
                INTO public_hris
                OPTIONS (import_default 'true');
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP SCHEMA IF EXISTS public_hris CASCADE;');
        DB::statement('DROP SERVER IF EXISTS hris CASCADE;');
        DB::statement('DROP EXTENSION IF EXISTS tds_fdw;');
    }
};
