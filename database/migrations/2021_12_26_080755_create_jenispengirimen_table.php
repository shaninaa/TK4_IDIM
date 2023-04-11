<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenispengirimenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenispengirimen', function (Blueprint $table) {
            $table->char('id_pengiriman', 8)->primary();
            $table->string('nama_pengiriman');
            $table->integer('harga_kirim');
            $table->timestamps();
        });
        DB::unprepared('CREATE TRIGGER addpengiriman BEFORE INSERT ON `jenispengirimen` FOR EACH ROW
                BEGIN
                   DECLARE shn INT(10) DEFAULT 0;
	                SET shn = (SELECT COUNT(id_pengiriman) FROM jenispengirimen)+ 1;
	                SET new.id_pengiriman = CONCAT("JNSP", LPAD((SELECT shn),4,"0"));
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenispengirimen');
        DB::unprepared('DROP TRIGGER `addpengiriman`');
    }
}
