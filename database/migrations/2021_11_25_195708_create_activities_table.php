<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();

            $table->string('uid',36);
            $table->string('companyuid',36);
            $table->string('useruid',36);
            $table->string('operationaluid',36);
            $table->string('typeactivityuid',36);
            $table->text('activitytitle');
            $table->text('activitydescip');
            $table->date('activitybegin');
            $table->date('activityend');
            $table->text('activitylocation');
            
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
        Schema::dropIfExists('activities');
    }
}
