<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Third_Data extends Model
{
    use HasFactory;

    protected $table = 'third_data';
    protected $primaryKey = 'data_id';
    protected $fillable = [
        'data_id',
        'nit',
        'number_phone',
        'entity_type_id',
        'email',
        'business_name',
        'address',
        'statu_type_id' => 1,
    ];
    public function userThirdData(): HasOne
    {
        return $this->hasOne(User::class, 'third_data_id', 'data_id');
    }
    public function profession(): HasOne
    {
        return $this->hasOne(Profession::class, 'profession_id');
    }

    // Relaciones con las vistas
    public function documentType(): HasOne
    {
        return $this->hasOne(Document_Type_View::class, 'detail_id', 'document_type_id');
    }
    public function gender(): HasOne
    {
        return $this->hasOne(Gender_View::class, 'detail_id', 'gender_type_id');
    }
    public function statutype(): HasOne
    {
        return $this->hasOne(Statu_View::class, 'detail_id', 'statu_type_id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'data_id');
    }
}
