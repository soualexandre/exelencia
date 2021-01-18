<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendasEntrada extends Model
{
    
    protected $fillable = [
        'pagamento',
        'valor',
        'data',
    ];
    use HasFactory;
}
