<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->binary('path');
            $table->string('type');
            $table->string('name');
            $table->string('description');
            $table->binary('pathUser');
            $table->string('nameUser');
            $table->date('date');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE blogs MODIFY COLUMN  path LONGBLOB");
        DB::statement("ALTER TABLE blogs MODIFY COLUMN  pathUser LONGBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
