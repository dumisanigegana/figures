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
        Schema::create('contractors', function (Blueprint $table) {
            $table->id();
            $table->string('reg_num')->unique();
            $table->string('entity_name');
            $table->string('business_line');
            $table->string('company_number');
            $table->date('reg_date')->nullable();
            $table->string('address');
            $table->string('email')->unique();
            $table->string('e_phone');
            $table->string('website')->nullable();
            $table->string('director_name');
            $table->string('fname');
            $table->string('designation');
            $table->string('d_phone');
            $table->boolean('terms')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contractors');
    }
};
