<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('data-1')->nullable()->index();
            $table->string('data-2')->nullable()->index();
            $table->string('data-3')->nullable()->index();
            $table->string('data-4')->nullable()->index();
            $table->string('data-5')->nullable()->index();
            $table->string('data-6')->nullable()->index();
            $table->string('data-7')->nullable()->index();
            $table->string('data-8')->nullable()->index();
            $table->string('data-9')->nullable()->index();
            $table->string('data-10')->nullable()->index();
            $table->string('data-11')->nullable()->index();
            $table->string('data-12')->nullable()->index();
            $table->string('data-13')->nullable()->index();
            $table->string('data-14')->nullable()->index();
            $table->string('data-15')->nullable()->index();
            $table->string('data-16')->nullable()->index();
            $table->string('data-17')->nullable()->index();
            $table->string('data-18')->nullable()->index();
            $table->string('data-19')->nullable()->index();
            $table->string('data-20')->nullable()->index();
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
        Schema::dropIfExists('reports_data');
    }
}
