<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeactivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeactivities', function (Blueprint $table) {
            $table->id();

            $table->string('uid',36);
            $table->string('companyuid',36);
            $table->string('name');
            $table->text('description');
            $table->string('typecolor',8)->nullable();
            $table->integer('typeview')->default(1)->comment('1:Calendar, 2: List, 3:Doc');
            $table->integer('mcal')->default(1)->comment('1: SI, 0: No');
            $table->integer('mind')->default(1)->comment('1: SI, 0: NO');
            $table->integer('parent')->default(0);
            $table->integer('order')->default(0);
            $table->string('icon',36)->nullable()->default("fa fa-plus ");
            $table->string('tmenu',1)->nullable()->default("T");
            $table->integer('status')->default(1)->comment('1: Active, 0: Inactive');
            
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
        Schema::dropIfExists('typeactivities');
    }
}
