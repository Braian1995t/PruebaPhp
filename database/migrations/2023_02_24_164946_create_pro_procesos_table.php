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
        Schema::create('pro_procesos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('PRO_ID');
            $table->string('PRO_PREFIJO');
            $table->string('PRO_NOMBRE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pro_procesos');
    }
};
