<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// nome padrão para a tabela no db = fornecedors
class Fornecedor extends Model
{
    //Implementando o SoftDeletes
    use SoftDeletes;

    // Nome alterado para correção no db
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
