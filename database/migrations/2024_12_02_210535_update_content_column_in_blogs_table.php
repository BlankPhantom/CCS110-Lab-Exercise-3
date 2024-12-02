<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
        
            $table->text('content')->change();
        });
    }
    
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            // Revert the column to VARCHAR if needed
            $table->string('content', 255)->change(); // Change to VARCHAR(255)
        });
    }
    
};
