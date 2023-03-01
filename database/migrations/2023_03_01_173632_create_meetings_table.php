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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semester_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string("title")
                ->index();
            $table->longText("detail")
                ->comment("รายละเอียด")
                ->nullable();
                $table->foreignId("created_by")
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->nullable();
            $table->foreignId("approve_by")
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
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
        Schema::dropIfExists('meetings');
    }
};
