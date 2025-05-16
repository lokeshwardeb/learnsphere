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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id("assignment_id");
            $table->string("assignment_title");
            $table->string("assignment_desc");
            // $table->string("assignment_file");
            // $table->string("assignment_starting_date")->nullable(true);
            $table->string("assignment_starting_date");
            $table->string("assignment_submission_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
