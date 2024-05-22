<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_jenis_motor', function (Blueprint $table) {
            $table->integer('id_jenis_motor')->unsigned()->change();
            $table->foreign('id_jenis_motor')->references('id_jenis_motor')->on('jenis_motor')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('penyewaan', function (Blueprint $table) {
            $table->integer('id_customer')->unsigned()->change();
            $table->foreign('id_customer')->references('id_customer')->on('users_table')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_jenis_motor')->unsigned()->change();
            $table->foreign('id_jenis_motor')->references('id_jenis_motor')->on('jenis_motor')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('detail_penyewaan', function (Blueprint $table) {
            $table->integer('id_penyewaan')->unsigned()->change();
            $table->foreign('id_penyewaan')->references('id_penyewaan')->on('penyewaan')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_customer')->unsigned()->change();
            $table->foreign('id_customer')->references('id_customer')->on('users_table')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relasi');
    }
}
