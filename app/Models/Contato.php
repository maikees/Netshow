<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contato
 * @package App\Models
 * @property-read int $id
 * @property string $nome
 * @property string $email
 * @property string $telefone
 * @property string $mensagem
 * @property string $ip
 * @property string $arquivo
 */
class Contato extends Model
{
    use HasFactory;

    protected $table = "contact";
}
