<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->dateTime('tgl_order');
            /**
             *  keterangan status order :
             *  - MP : Menunggu Pembayaran
             *  - MV : Menunggu Verifikasi Admin
             *  - ACC : Pembayaran diterima, Tiket berhasil dipesan
             *  - PR : Pembayaran diReject atau ditolak, mohon upload bukti pembayaran kembali
             *  - PB : Pembayaran expired atau belum dibayar sampai waktu habis (Batal)
             */
            $table->enum('status_order', ['MP','MV','ACC','PR','PB']);
            $table->foreignId('user_id');
            $table->foreignId('event_id');
            $table->foreignId('payment_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id_event')->on('events')->onDelete('cascade');
            $table->foreign('payment_id')->references('id_payment')->on('payments')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function(Blueprint $table)
        {
            $table->dropForeign(['user_id','event_id','payment_id']);
        });
        Schema::dropIfExists('orders');
    }
}
