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
        Schema::create('reportdata', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('title');
            $table->enum('asset_name', ['E-learning', 'Silam', 'SID', 'Polibatam.ac.id']);
            $table->enum('severity', ['medium', 'high', 'critical']);
            $table->text('description');
            $table->string('foto_bukti');
            $table->string('url_video');
            $table->string('submitted_by');
            $table->enum('status', ['Accepted', 'Pending', 'Rejected'])->default('Pending');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportdata');
    }
};
