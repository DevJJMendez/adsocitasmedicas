<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Detail extends Model
{
    use HasFactory;
    protected $table = 'details';
    protected $guarded = [];
    public function headers(): HasMany
    {
        return $this->hasMany(Header::class, 'id_header');
    }
}
