<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bouteille extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'image',
        'code_saq',
        'description',
        'prix_saq',
        'url_saq',
        'url_img',
        'format',
        'type',
    ];    
}
