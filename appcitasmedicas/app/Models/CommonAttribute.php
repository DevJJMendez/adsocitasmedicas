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
    protected $guarded = [];
    public function status(): HasOne
    {
        return $this->hasOne(Status::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function documentType(): HasOne
    {
        return $this->hasOne(DocumentType::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class, 'id_common_attribute', 'common_attribute_id');
    }
    public function entityType(): HasOne
    {
        return $this->hasOne(EntityType::class, 'id_common_attribute', 'common_attribute_id');
    }
}
