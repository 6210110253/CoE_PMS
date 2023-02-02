<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_reservation_id')->constrained()->cascadeOnDelete()->comment("รหัสการจองหัวข้อ");
            $table->foreignId("approve_by")
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->json('student_reservetion')->nullable()->comment("เก็บรายชื่อนักศึกษาที่ร่วมโปรเจค");
            $table->enum("status", ['process', 'unprocess', 'finished'])->default('process');
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
        Schema::dropIfExists('project_lists');
    }
}
