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
    // protected $fillable = [
    //     'third_data_id',
    //     'document_type_id',
    //     'identification_number',
    //     'first_name',
    //     'last_name',
    //     'number_phone',
    //     'birth_date',
    //     'id_gender',
    //     'address',
    //     'id_medical_entity',
    //     'id_status',
    //     'id_specialty'
    // ];
    protected $guarded = [];
}
