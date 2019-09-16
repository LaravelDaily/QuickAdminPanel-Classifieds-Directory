<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCompaniesTable extends Migration
{
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->unsignedInteger('city_id')->nullable();

            $table->foreign('city_id', 'city_fk_344254')->references('id')->on('cities');
        });
    }
}
