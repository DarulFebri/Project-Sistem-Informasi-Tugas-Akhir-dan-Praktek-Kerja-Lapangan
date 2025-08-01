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
        Schema::table('pengajuan_status_histories', function (Blueprint $table) {
            $table->timestamp('read_at')->nullable()->after('new_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengajuan_status_histories', function (Blueprint $table) {
            $table->dropColumn('read_at');
        });
    }
};
