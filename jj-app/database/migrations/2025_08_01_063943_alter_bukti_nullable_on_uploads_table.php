<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('uploads', function (Blueprint $table) {
            $table->string('bukti')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('uploads', function (Blueprint $table) {
            $table->string('bukti')->nullable(false)->change(); // Kembali ke NOT NULL
        });
    }
};
