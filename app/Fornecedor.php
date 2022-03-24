<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//fornecedors

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
