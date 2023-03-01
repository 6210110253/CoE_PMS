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
        Schema::table('announcements', function (Blueprint $table) {
            $table->foreignId('semester_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->boolean('is_active')->default(0);
            $table->longText("detail")
                ->comment("รายละเอียด")
                ->nullable();;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('announcements', function (Blueprint $table) {
            $table->dropColumn([
                'semester_id',
                'is_active',
                'detail'
            ]);
        });
    }
};
