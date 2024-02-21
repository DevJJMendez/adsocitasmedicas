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
    protected $guarded = [];
    public function profession():HasOne{
        return $this->hasOne(Profession::class, 'profession_id');
    }
    public function medicalEntity():BelongsTo{
        return $this->belongsTo(Medical_Entities::class, 'third_data_id');
    }

    // Relaciones con las vistas
    public function document():HasOne{
        return $this->hasOne(Document_Type_View::class, '');
    }
}
