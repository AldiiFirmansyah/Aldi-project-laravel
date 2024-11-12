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
        Schema::table('kameras', function (Blueprint $table) {
            $table->string('nama_kamera');  // Tambahkan kolom nama_kamera
        });
    }
    
    public function down()
    {
        Schema::table('kameras', function (Blueprint $table) {
            $table->dropColumn('nama_kamera');
        });
    }
};