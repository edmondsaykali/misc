<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AtmGeneral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atm_general', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('type');
            $table->string('country');
            $table->string('city');
            $table->string('locale');
            $table->decimal('longitude',10,6);
            $table->decimal('latitude',10,6);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atm_general');
    }
}

