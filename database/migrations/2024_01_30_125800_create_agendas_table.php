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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->biginteger('profissional_id')->unsigned()->nullable(false);
            $table->biginteger('cliente_id')->unsigned()->nullable(true);
            $table->dateTime('data_Hora')->nullable(false);
            $table->biginteger('servico_id')->unsigned()->nullable(true);
            $table->string('pagamento', 20)->nullable(true);
            $table->integer('valor')->nullable(true);
            $table->timestamps();
            $table->foreign('profissional_id')->references('id')->on('profissionals');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('servico_id')->references('id')->on('servicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifExists('agendas');
    }
};
