<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Wallets
 * @package App\Models
 * @version October 24, 2022, 10:57 am UTC
 *
 * @property string $nom
 * @property string $nbre_eleve
 * @property integer $enseignant
 * @property integer $frais_inscription
 * @property integer $frais_scolariter
 */
class Classe extends Model
{

    use HasFactory;

    public $table = 'classe';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nom',
        'enseignant',
        'frais_scolariter',
        'nbre_eleve',
        'frais_inscription'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'nbre_eleve' => 'string',
        'enseignant' => 'string',
        'frais_inscription' => 'string',
        'frais_scolariter' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static array $rules = [
        'enseignant' => 'required|string|max:255',
        'nom' => 'required',
        'nbre_eleve' => 'required',
        'frais_inscription' => 'required',
        'frais_scolariter' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
public function eleves(): HasMany
{
    return $this->hasMany(Eleve::class);
}
}
