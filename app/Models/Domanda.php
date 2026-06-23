<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Monolog\Handler\FormattableHandlerTrait;

class Domanda extends Model
{
    use HasFactory;

    protected $table = "Domande";

    public $timestamps = true;

    protected $fillable = [
        "domanda",
        "risposta_corretta",
        "risposta2",
        "risposta3",
        "risposta4",
        "risposta5",
        "categoria",
        "difficoltà_richiesta",
        "difficoltà_utente",
        "numero_risposte_utente",
        "numero_risposte_non_date",
        "numero_risposte_sbagliate"
    ];

    protected $casts = [
        "difficoltà_richiesta" => "double",
        "difficoltà_utente" => "double",
        "numero_risposte_utente" => "integer",
        "numero_risposte_non_date" => "integer",
        "numero_risposte_sbagliate" => "integer"
    ];

}
