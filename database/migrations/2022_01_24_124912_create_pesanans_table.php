<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->char('id_pesanan', 8)->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->biginteger('total_harga_produk');
            $table->integer('id_kelurahan');
            $table->char('id_pengiriman', 8);
            $table->char('id_metode', 8);
            $table->string('status')->default('keranjang');
            $table->timestamps();
            $table->foreign('id_pengiriman')->references('id_pengiriman')->on('jenispengirimen');
            $table->foreign('id_metode')->references('id_metode')->on('metodebayars');
        });

        DB::unprepared('CREATE TRIGGER addpemesanan BEFORE INSERT ON `pesanans` FOR EACH ROW
                BEGIN
                   DECLARE shn INT(10) DEFAULT 0;
	                SET shn = (SELECT COUNT(id_pesanan) FROM pesanans)+ 1;
	                SET new.id_pesanan = CONCAT("PSN", LPAD((SELECT shn),5,"0"));
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
        DB::unprepared('DROP TRIGGER `addpemesanan`');
    }
}
