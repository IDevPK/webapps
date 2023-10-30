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
        Schema::create('liberaries', function (Blueprint $table) {
            $table->integer('lib_id')->autoIncrement();
            // $table->foreign('stu_id')->references('student_id')->on('students')
            $table->foreignId('stu_id')->constrained('students')
            ->onUpdate('cascade')->onDelete('set Null');
            $table->string('book');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liberary');
    }
};
