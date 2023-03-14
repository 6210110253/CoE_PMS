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
        Schema::create('meeting_resevations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meeting_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete()
                ->comment("รหัสนักศึกษาที่ทำการจอง");
            $table->enum("status", ['wait', 'approve', 'reject', 'remove'])->default('wait');
            $table->longText("comment")->nullable();
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
        Schema::dropIfExists('meeting_resevations');
    }
};
