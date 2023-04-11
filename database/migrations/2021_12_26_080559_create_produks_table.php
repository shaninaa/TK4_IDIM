<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->char('id_produk', 8)->primary();
            $table->char('id_jenis', 8);
            $table->string('nama_produk');
            $table->string('gambar_produk');
            $table->biginteger('harga_produk');
            $table->integer('stok_produk');
            $table->string('ukuran');
            $table->string('variasi');
            $table->text('deskripsi');
            $table->timestamps();
            $table->foreign('id_jenis')->references('id_jenis')->on('jenisproduks');
        });

        DB::unprepared('CREATE TRIGGER addproduk BEFORE INSERT ON `produks` FOR EACH ROW
                BEGIN
                   DECLARE shn INT(10) DEFAULT 0;
	                SET shn = (SELECT COUNT(id_produk) FROM produks)+ 1;
	                SET new.id_produk = CONCAT("PRD", LPAD((SELECT shn),5,"0"));
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
        DB::unprepared('DROP TRIGGER `addproduk`');
    }
}
