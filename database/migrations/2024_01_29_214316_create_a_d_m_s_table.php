<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_d_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 120)->nullable(false);
            $table->string('email', 120)->unique()->nullable(false);
            $table->string('cpf', 11)->unique()->nullable(false);
            $table->string('password')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_d_m_s');
    }
};
