<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bouteille extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'image',
        'code_saq',
        'description',
        'pays',
        'millesim',
        'prix_saq',
        'url_saq',
        'url_img',
        'format',
        'type_id',
        'user_id',
    ];  
    
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function celliers()
    {
        return $this->belongsToMany(Cellier::class, 'bouteilles_celliers', 'bouteille_id', 'cellier_id')
            ->withPivot('quantite', 'note');
    }    
}
