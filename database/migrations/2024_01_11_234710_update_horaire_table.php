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
        Schema::table('horaire', function (Blueprint $table) {
            $table->dropColumn('horaire depart');
            $table->dropColumn('horaire d arriver');
            $table->string('depart');
            $table->string('arriver');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('horaire', function (Blueprint $table) {
            $table->dropColumn('horaire depart');
            $table->dropColumn('horaire d arriver');
        });
    }
};
