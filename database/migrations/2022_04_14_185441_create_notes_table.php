<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->text("number");
            $table->text("number_tab");
            $table->text("rank");
            $table->text("name");
            $table->text("birthday");
            $table->text("passport_serio");
            $table->text("passport_number");
            $table->text("passport");
            $table->text("who_gift");
            $table->text("date_gift");

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
        Schema::dropIfExists('notes');
    }
};
