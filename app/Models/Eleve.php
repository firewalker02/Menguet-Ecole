<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Wallets
 * @package App\Models
 * @version October 24, 2022, 10:57 am UTC
 *
 * @property string $nom
 * @property string $sexe
 * @property string $prenom
 * @property string $image
 * @property string $date_naissance
 * @property string $classe
 * @property string $nom_pere
 * @property string $nom_mere
 * @property string $telephone1
 * @property string $telephone2
 * @property string $email
 * @property string $adresse
 * @property string $description
 * @property string $lieu_naissance
 */
class Eleve extends Model
{

    use HasFactory;

    public $table = 'eleves';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nom',
        'prenom',
        'sexe',
        'image',
        'date_naissance',
        'lieu_naissance',
        'classe',
        'nom_pere',
        'nom_mere',
        'telephone1',
        'telephone2',
        'email',
        'description',
        'adresse'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'sexe' => 'string',
        'prenom' => 'string',
        'image' => 'string',
        'date_naissance' => 'string',
        'lieu_naissance' => 'string',
        'classe' => 'string',
        'nom_pere' => 'string',
        'nom_mere' => 'string',
        'telephone1' => 'string',
        'telephone2' => 'string',
        'email' => 'string',
        'description' => 'string',
        'adresse' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static array $rules = [
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'sexe' => 'required|string|max:4',
        'image' => 'required|string|max:255',
        'date_naissance' => 'required|string|max:255',
        'lieu_naissance' => 'required|string|max:255',
        'classe' => 'required|string|max:255',
        'nom_pere' => 'string|max:255',
        'nom_mere' => 'string|max:255',
        'telephone1' => 'required|string|max:255',
        'telephone2' => 'string|max:255',
        'email' => 'required|email|max:255',
        'description' => 'string',
        'adresse' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
    ];

    public function class(): HasOne
    {
        return $this->hasOne(Classe::class);
    }
}

