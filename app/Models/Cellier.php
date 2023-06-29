<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cellier extends Model
{
    use HasFactory;

    protected $fillable = [
        'bouteille_id',
        'date_achat',
        'garde_jusqua',
        'notes',
        'prix',
        'quantite',
        'millesime',
        'user_id',
    ];    
}
