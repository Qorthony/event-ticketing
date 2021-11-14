<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creators', function (Blueprint $table) {
            $table->id('id_creator');
            $table->string('no_rek');
            $table->string('nama_bank');
            $table->string('nama_rek');
            $table->timestamps();
        });

        Schema::table('events', function (Blueprint $table)
        {
            $table->foreignId('creator_id')->nullable();

            $table->foreign('creator_id')->references('id_creator')->on('creators');
        });

        Schema::table('users', function (Blueprint $table)
        {
           $table->foreignId('creator_id')->nullable();

           $table->foreign('creator_id')->references('id_creator')->on('creators');
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
            // $table->dropForeign(['creator_id']);
            $table->dropForeign('events_creator_id_foreign');
            $table->dropColumn('creator_id');
        });

        Schema::table('users', function (Blueprint $table)
        {
            // $table->dropForeign(['creator_id']);
            $table->dropForeign('users_creator_id_foreign');
            $table->dropColumn('creator_id');
        });

        Schema::dropIfExists('creators');
    }
}
