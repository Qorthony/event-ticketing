<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id('id_event');
            $table->string('nama_event');
            $table->string('jenis_event');
            $table->dateTime('tgl_event');
            $table->integer('harga');
            $table->integer('kuota');
            $table->string('poster_url',255);
            $table->text('deskripsi')->nullable();
            $table->string('penyelenggara');
            $table->enum('status_verifikasi', ['wait', 'acc', 'reject']);
            // $table->boolean('distribusi_tiket');
            // $table->integer('komisi_distribusi')->nullable();
            $table->foreignId('admin_id')->nullable();
            $table->timestamps();

            $table->foreign('admin_id')->references('id_admin')->on('admins')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table)
        {
            $table->dropForeign(['admin_id']);
        });
        Schema::dropIfExists('events');
    }
}
