<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->comment("รหัสนักศึกษาที่ทำการจอง");
            $table->json('student_reservetion')->nullable()->comment('เก็บรายชื่อนักศึกษาที่ร่วมโปรเจค');
            $table->enum("status", ['wait', 'approve', 'reject', 'remove'])->default('wait');
            $table->foreignId('semester_id')->constrained()->cascadeOnDelete();
            $table->longText("comment")->nullable();

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_reservations');
    }
}