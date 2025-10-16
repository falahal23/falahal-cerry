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
      {
        Schema::table('pelanggan', function (Blueprint $table) {
            // Menambahkan kolom 'gender' dengan tipe ENUM
            // Nilai yang diperbolehkan: 'Male', 'Female', 'Other'
            // Mengatur agar kolom ini boleh NULL (nullable)
            $table->enum('gender', ['Male', 'Female', 'Other','NONBINARY'])->change();
            // Menambahkan setelah kolom 'birthday' adalah opsional,
            // tapi membantu penempatan kolom.
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            // Menghapus kolom 'gender' jika rollback (undo migration)
            $table->enum('gender', ['Male', 'Female', 'Other'])->change();
        });
    }
};
