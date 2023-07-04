<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BouteilleCellier extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'id',
        'cellier_id',
        'bouteille_id',
        'quantite',
        'note',
    ];  
    
    public function cellier()
    {
        return $this->belongsTo(Cellier::class);
    }

    public function bouteille()
    {
        return $this->belongsTo(Bouteille::class);
    }    
 
}
