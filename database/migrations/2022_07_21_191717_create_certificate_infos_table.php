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
        Schema::create('certificate_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('director_name');
            $table->string('director_signature');
            $table
                ->foreingId("teacher_id")
                ->references("id")
                ->on("teachers")
                ->cascadeOnDelete();
            $table
                ->foreingId("category_id")
                ->references("id")
                ->on("categories")
                ->cascadeOnDelete();
            $table
                ->foreingId("student_id")
                ->references("id")
                ->on("students")
                ->cascadeOnDelete();
            $table
                ->foreingId("certificate_file_id")
                ->references("id")
                ->on("certificate_files")
                ->cascadeOnDelete();
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
        Schema::dropIfExists('certificate_infos');
    }
};
