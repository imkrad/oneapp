<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('list_positions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->tinyIncrements('id');
            $table->smallInteger('special_id')->unsigned()->nullable();
            $table->foreign('special_id')->references('id')->on('list_data')->onDelete('cascade');
            $table->smallInteger('administrative_id')->unsigned()->index();
            $table->foreign('administrative_id')->references('id')->on('list_data')->onDelete('cascade');
            $table->tinyInteger('salary_id')->unsigned()->index();
            $table->foreign('salary_id')->references('id')->on('list_salaries')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_positions');
    }
};
