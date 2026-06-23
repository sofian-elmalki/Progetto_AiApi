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
        Schema::create("Domande",function(Blueprint $table){
            $table->id();
            $table->string("domanda");
            $table->string("risposta_corretta");   
            $table->string("risposta2");
            $table->string("risposta3");
            $table->string("risposta4");
            $table->string("risposta5"); 
            $table->string("categoria")->nullable();
            $table->double("difficolta_richiesta")->nullable();
            $table->double("difficolta_utente")->nullable();
            $table->integer("numero_risposte_utente")->default(0);
            $table->integer("numero_risposte_non_date")->default(0);
            $table->integer("numero_risposte_sbagliate")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("Domande");
    }
};
