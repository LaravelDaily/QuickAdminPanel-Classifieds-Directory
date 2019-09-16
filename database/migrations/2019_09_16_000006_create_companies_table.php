<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('address')->nullable();

            $table->longText('description')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
