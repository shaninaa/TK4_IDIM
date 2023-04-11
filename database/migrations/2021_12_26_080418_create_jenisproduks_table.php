<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisproduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenisproduks', function (Blueprint $table) {
            $table->char('id_jenis', 8)->primary();
            $table->string('nama_jenis');
            $table->timestamps();
        });
        DB::unprepared('CREATE TRIGGER addjenis BEFORE INSERT ON `jenisproduks` FOR EACH ROW
                BEGIN
                   DECLARE shn INT(10) DEFAULT 0;
	                SET shn = (SELECT COUNT(id_jenis) FROM jenisproduks)+ 1;
	                SET new.id_jenis = CONCAT("JNS", LPAD((SELECT shn),5,"0"));
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenisproduks');
        DB::unprepared('DROP TRIGGER `addproduk`');
    }
}
