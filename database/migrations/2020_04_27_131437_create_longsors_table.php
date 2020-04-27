<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLongsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('longsors', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('desa');
            $table->char('kecamatan', 10)->unique();
            $table->string('jumlah_kejadian');
            $table->string('tahun');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
