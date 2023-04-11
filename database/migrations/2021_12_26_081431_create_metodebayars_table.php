<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodebayarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodebayars', function (Blueprint $table) {
            $table->char('id_metode', 8)->primary();
            $table->string('nama_metode');
            $table->string('norekening');
            $table->timestamps();
        });
        DB::unprepared('CREATE TRIGGER addmetode BEFORE INSERT ON `metodebayars` FOR EACH ROW
                BEGIN
                   DECLARE shn INT(10) DEFAULT 0;
	                SET shn = (SELECT COUNT(id_metode) FROM metodebayars)+ 1;
	                SET new.id_metode = CONCAT("MTD", LPAD((SELECT shn),5,"0"));
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodebayars');
        DB::unprepared('DROP TRIGGER `addmetode`');
    }
}
