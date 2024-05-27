Tengo un problema con esta condicion
```php
<td>
@if ($medicalEntity->id_status = 1)
    <span class="fw-bolder rounded bg-success text-white p-2">
        {{ $medicalEntity->status->commonAttribute->name }}
    </span>
@else()
    <span class="fw-bolder rounded bg-error text-white p-2">
        {{ $medicalEntity->status->commonAttribute->name }}
    </span>
@endif
</td>
```
Por algun motivo las $medicalEntity->id_status = 2 las muestra en bg-success

en teoria para ingresar al sistema debo proporcionar el email y password lo cuales se encuentran el la tabla users pero users tiene una relacion con third_data:
```php
class Third_Data extends Model
{
    use HasFactory;
    protected $table = 'third_data';
    protected $primaryKey = 'third_data_id';
    protected $guarded = [];
    public function documentType(): BelongsTo
    {
        return $this->belongsTo(DocumentType::class, 'id_document_type', 'document_type_id');
    }
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'id_gender', 'gender_id');
    }
    public function medicalEntity(): BelongsTo
    {
        return $this->belongsTo(Medical_Entities::class, 'id_medical_entity', 'medical_entity_id');
    }
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'id_status', 'status_id');
    }
    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class, 'id_specialty', 'specialty_id');
    }
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id_third_data', 'id');
    }
}
class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function thirdData(): HasOne
    {
        return $this->hasOne(Third_Data::class, 'id_third_data', 'id');
    }
    public function patientAppointments(): HasMany
    {
        return $this->hasMany(Appointments::class, 'id_patient', 'id');
    }
    public function doctorAppointments(): HasMany
    {
        return $this->hasMany(Appointments::class, 'id_doctor', 'id');
    }
}

Schema::create('third_data', function (Blueprint $table) {
            $table->unsignedSmallInteger('third_data_id', true);
            $table->unsignedTinyInteger('id_document_type')->nullable();
            $table->foreign('id_document_type')->references('document_type_id')->on('document_types')->onDelete('set null');
            $table->string('identification_number', 12)->unique();
            $table->string('name', 30);
            $table->string('last_name', 30);
            $table->string('number_phone', 30)->unique();
            $table->dateTime('birth_date');
            $table->unsignedTinyInteger('id_gender')->nullable();
            $table->foreign('id_gender')->references('gender_id')->on('genders')->onDelete('set null');
            $table->string('address', 100)->nullable();
            $table->unsignedTinyInteger('id_medical_entity')->nullable();
            $table->foreign('id_medical_entity')->references('medical_entity_id')->on('medical_entities')->onDelete('set null');
            $table->unsignedTinyInteger('id_status')->default('1')->nullable();
            $table->foreign('id_status')->references('status_id')->on('statuses')->onDelete('set null');
            $table->unsignedTinyInteger('id_specialty')->nullable();
            $table->foreign('id_specialty')->references('specialty_id')->on('specialties')->onDelete('set null');
            $table->timestamps();
        });
Schema::create('users', function (Blueprint $table) {
            $table->unsignedSmallInteger('id', true);
            $table->unsignedSmallInteger('id_third_data')->nullable();
            $table->foreign('id_third_data')->references('third_data_id')->on('third_data');
            $table->string('email', 100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
```

este es el controlador:
```php
class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected function authenticated(Request $request, $user)
    {
        if ($user->thirdData && $user->thirdData->id_status != 1) {
            Auth::logout();
            return redirect()->route('login')->with('error', 'No tienes permiso para acceder.');
        }
        return redirect()->intended($this->redirectPath());
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
```

// $medicalEntitiesTypes = EntityType::select(['entity_type_id', 'id_common_attribute'])->with([
        //     'commonAttribute' => function ($query) {
        //         $query->select([
        //             'common_attribute_id',
        //             'name'
        //         ]);
        //     }
        // ])->get();