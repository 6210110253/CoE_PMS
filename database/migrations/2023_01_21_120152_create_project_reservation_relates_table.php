<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectReservationRelatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_reservation_relates', function (Blueprint $table) {
             $table->foreignId('project_reservation_id')->constrained()->cascadeOnDelete()->comment("รหัสการจองหัวข้อ");
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->comment("รหัสนักศึกษาที่ทำการจอง");


            $table->primary([
                'project_reservation_id',
                'user_id'
            ],'primary_key_project_reservation');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_reservation_relates');
    }
}