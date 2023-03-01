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
        Schema::create('processeds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_process_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->longText("detail")
                ->nullable();
            $table->string("file_progress")
                ->nullable()
                ->comment("ไฟล์รายงานความก้าวหน้า");
            $table->string("file_report")
                ->nullable()
                ->comment("ไฟล์รายงาน");
            $table->string("file_poster")
                ->nullable()
                ->comment("ไฟล์โปสเตอร์");
            $table->string("file_other")
                ->nullable()
                ->comment("ไฟล์อื่นๆ");
            $table->string("file_video")
                ->nullable()
                ->comment("ไฟล์วีดีโอ");
            $table->string("git_url")
                ->nullable()
                ->comment("ลิ้งกิต");
            $table->enum("type", ['appointment', 'submission','report'])->default('appointment');
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
            $table->foreignId('project_id')
                ->constrained()
                ->cascadeOnDelete()
                ->nullable();
            $table->foreignId('project_list_id')
                ->constrained()
                ->cascadeOnDelete()
                ->nullable();
            $table->dateTime("date_meeting")
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
        Schema::dropIfExists('processeds');
    }
};
