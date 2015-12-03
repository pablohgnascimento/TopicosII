<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MensagemDados extends Model
{
    protected $table = 'mensagens';

    protected  $primaryKey = 'id';

    protected  $fillable= ['id_ata', 'mensagem', 'usuario'];

    public function getCreatedAtAttribute($date)
    {
        return $data = Carbon::parse($date)->format('d/m/Y H:i:s');
    }


}
