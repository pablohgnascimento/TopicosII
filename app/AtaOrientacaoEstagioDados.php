<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AtaOrientacaoEstagioDados extends Model
{
    protected $table="ata_orientacao_estagio";

    protected $fillable=[
        'data',
        'atividadedesenvolvida',
        'proximaatividade',
        'avaliacao',
        'usuario',
        'orientador'
    ];


    public function getCreatedAtAttribute ($date)
    {
        return Carbon::parse ($date)->format('d/m/Y');
    }
}
