<?php

namespace sinox;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //o padrão assume que o nome da tabela no banco estaŕa no plura e tudo minusculo
    //se quiser definir explicitamente use: protected $table = 'nomeTabela';
}
