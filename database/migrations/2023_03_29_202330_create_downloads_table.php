<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->unsignedInteger('package_id');
            $table->timestamps();

            $table->foreign('package_id')->references('id')->on('packages');
        });
    }
};
