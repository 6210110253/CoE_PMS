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
        Schema::create('job_processes', function (Blueprint $table) {
            $table->id();
            $table->enum("process", ['Pre-Project', 'Project I', 'Project II', 'Finished', 'Cancel'])->default('Pre-Project');
            $table->foreignId('semester_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string("topic")
                ->index()
                ->nullable();
            $table->enum("type", ['appointment', 'submission','report'])->default('appointment');
            $table->dateTime("start_date")
                ->nullable();
            $table->dateTime("end_date")
                ->nullable();
            $table->enum("status", ['draft', 'publish'])->default("draft");
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
        Schema::dropIfExists('job_processes');
    }
};
