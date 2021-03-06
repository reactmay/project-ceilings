<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mail_admin', 255);
            $table->string('mail_from', 255);
            $table->boolean('show_aboutus')->default(false);
            $table->boolean('show_service')->default(false);
            $table->boolean('show_portfolio')->default(false);
            $table->boolean('show_team')->default(false);
            $table->boolean('show_testimonials')->default(false);
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
        Schema::dropIfExists('settings');
    }
}
