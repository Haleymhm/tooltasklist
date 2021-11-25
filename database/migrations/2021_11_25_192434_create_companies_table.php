<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('uid',36)->unique();
            $table->string('uiduser',36);
            $table->string('rutrif',15)->nullable();
            $table->string('companynombre');
            $table->string('companyaddress');
            $table->string('companyphone')->nullable();
            $table->string('companyemail')->nullable();
            $table->string('companyalogo')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
