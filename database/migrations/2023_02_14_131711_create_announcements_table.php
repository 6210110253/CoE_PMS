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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string("title")
                ->index();
            $table->dateTime("start");
            $table->dateTime("finish");
            $table->enum("status", ['draft', 'publish'])->default('draft');
             $table->foreignId('semester_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->longText("detail")
                ->comment("รายละเอียด")
                ->nullable();
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
        Schema::dropIfExists('announcements');
    }
};