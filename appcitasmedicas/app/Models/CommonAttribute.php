<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CommonAttribute extends Model
{
    use HasFactory;
    protected $table = 'common_attributes';
    protected $primryKey = 'common_attribute_id';
    protected $fillable = [
        'common_attribute_id',
        'name',
        'nomenclature',
    ];
    public function status(): HasMany
    {
        return $this->hasMany(Status::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function documentType(): HasMany
    {
        return $this->hasMany(DocumentType::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function gender(): HasMany
    {
        return $this->hasMany(Gender::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function entityType(): HasMany
    {
        return $this->hasMany(EntityType::class, 'id_common_attribute', 'common_attribute_id');
    }
}
