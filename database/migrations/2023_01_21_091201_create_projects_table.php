<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("title")
                ->index()
                ->comment("หัวข้อโครงงาน");
            $table->longText("detail")->comment("รายละเอียด");
            $table->longText("scope")->comment("ขอบเขต"); 
            $table->longText("objective")->comment("จุดประสงค์"); 
            $table->longText("results")->comment("ผลที่คาดหวัง");
            $table->integer("member_count")->comment("จำนวนนักศึกษาที่รับ")->nullable();
            $table->longText("condition")
                ->nullable()
                ->comment("เงื่อนไข");
            $table->string("file_er_diagram")
                ->nullable()
                ->comment("ไฟล์ ER Diagram");
            $table->string("file_design")
                ->nullable()
                ->comment("ไฟล์ออกแบบ");
            $table->string("usecase")
                ->nullable()
                ->comment("usecase");
            $table->json("file_other")
                ->nullable()
                ->comment("ไฟล์อื่น ๆ ประกอบการพิจารณา");
            $table->foreignId("created_by")
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
             $table->foreignId("approve_by")
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->nullable();
            $table->enum("status", ['draft', 'publish'])->default("draft");
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
        Schema::dropIfExists('projects');
    }
}