<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Appointment
 *
 * @property int $appointment_id
 * @property \App\Models\Patient|null $patient
 * @property \App\Models\Specialty|null $specialty
 * @property \App\Models\Doctor|null $doctor
 * @property string $medical_evaluation
 * @property string $appointment_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereAppointmentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereAppointmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereMedicalEvaluation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereSpecialty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereUpdatedAt($value)
 */
	class Appointment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactType
 *
 * @property-read \App\Models\Phone|null $phone
 * @method static \Illuminate\Database\Eloquent\Builder|ContactType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactType query()
 */
	class ContactType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Detail
 *
 * @property int $detail_id
 * @property int $id_header
 * @property string $value
 * @property string|null $nomenclature
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Header|null $header
 * @method static \Illuminate\Database\Eloquent\Builder|Detail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail query()
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereDetailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereIdHeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereNomenclature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Detail whereValue($value)
 */
	class Detail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Doctor
 *
 * @property int $doctor_id
 * @property int $third_data_id
 * @property \App\Models\Profession|null $profession
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Appointment|null $appointment
 * @property-read \App\Models\Thirddata|null $thirddata
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereProfession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereThirdDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdatedAt($value)
 */
	class Doctor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DocumentType
 *
 * @property-read \App\Models\Thirddata|null $thirdata
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentType query()
 */
	class DocumentType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EntityType
 *
 * @property-read \App\Models\MedicalEntity|null $medicalentity
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType query()
 */
	class EntityType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gender
 *
 * @property-read \App\Models\Thirddata|null $thirddata
 * @method static \Illuminate\Database\Eloquent\Builder|Gender newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender query()
 */
	class Gender extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Header
 *
 * @property int $header_id
 * @property string $key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Detail> $details
 * @property-read int|null $details_count
 * @method static \Illuminate\Database\Eloquent\Builder|Header newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Header newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Header query()
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereHeaderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Header whereUpdatedAt($value)
 */
	class Header extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Mail
 *
 * @property int $mail_id
 * @property int $third_data_id
 * @property int $mail_type_id
 * @property int $priority_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MailType|null $mailtype
 * @property-read \App\Models\Priority|null $priority
 * @property-read \App\Models\Thirddata|null $thirdata
 * @method static \Illuminate\Database\Eloquent\Builder|Mail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mail query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereMailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereMailTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail wherePriorityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereThirdDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mail whereUpdatedAt($value)
 */
	class Mail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MailType
 *
 * @property-read \App\Models\Mail|null $mail
 * @method static \Illuminate\Database\Eloquent\Builder|MailType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MailType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MailType query()
 */
	class MailType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicalEntity
 *
 * @property int $medical_entity_id
 * @property int $third_data_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\EntityType|null $entitytype
 * @property-read \App\Models\Patient|null $patient
 * @property-read \App\Models\Thirddata|null $thirddata
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalEntity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalEntity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalEntity query()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalEntity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalEntity whereMedicalEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalEntity whereThirdDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalEntity whereUpdatedAt($value)
 */
	class MedicalEntity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Patient
 *
 * @property int $patient_id
 * @property int $third_data_id
 * @property int $entity_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Appointment|null $appointment
 * @property-read \App\Models\MedicalEntity|null $medicalentity
 * @property-read \App\Models\Thirddata|null $thirddata
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereThirdDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUpdatedAt($value)
 */
	class Patient extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Phone
 *
 * @property int $phone_id
 * @property int $third_data_id
 * @property int $contact_type
 * @property int $priority_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ContactType|null $contactType
 * @property-read \App\Models\Priority|null $priority
 * @property-read \App\Models\Thirddata|null $thirddata
 * @method static \Illuminate\Database\Eloquent\Builder|Phone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Phone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Phone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereContactType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone wherePhoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone wherePriorityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereThirdDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereUpdatedAt($value)
 */
	class Phone extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Priority
 *
 * @property-read \App\Models\Mail|null $mail
 * @property-read \App\Models\Phone|null $phone
 * @method static \Illuminate\Database\Eloquent\Builder|Priority newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Priority newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Priority query()
 */
	class Priority extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Profession
 *
 * @property int $profession_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Doctor|null $doctor
 * @method static \Illuminate\Database\Eloquent\Builder|Profession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profession query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereProfessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereUpdatedAt($value)
 */
	class Profession extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Specialty
 *
 * @property int $specialty_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Appointment|null $appointment
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty query()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty whereSpecialtyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty whereUpdatedAt($value)
 */
	class Specialty extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Statu
 *
 * @property-read \App\Models\Thirddata|null $thirdata
 * @method static \Illuminate\Database\Eloquent\Builder|Statu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statu query()
 */
	class Statu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Thirddata
 *
 * @property int $data_id
 * @property int $document_id
 * @property string|null $identification_number
 * @property string|null $nit
 * @property string $first_name
 * @property string|null $second_name
 * @property string $sur_name
 * @property string|null $second_sur_name
 * @property string|null $number_phone
 * @property \App\Models\Mail|null $mail
 * @property string|null $birth_date
 * @property int|null $gender_id
 * @property string|null $business_name
 * @property string $address
 * @property int $statu_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Doctor|null $doctor
 * @property-read \App\Models\DocumentType|null $document
 * @property-read \App\Models\Gender|null $gender
 * @property-read \App\Models\MedicalEntity|null $medicalentity
 * @property-read \App\Models\Patient|null $patient
 * @property-read \App\Models\Phone|null $phone
 * @property-read \App\Models\Statu|null $statu
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata query()
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereBusinessName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereDocumentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereGenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereIdentificationNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereNit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereNumberPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereSecondName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereSecondSurName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereStatuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereSurName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Thirddata whereUpdatedAt($value)
 */
	class Thirddata extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $user_id
 * @property int $third_data_id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Thirddata|null $thirddata
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereThirdDataId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserId($value)
 */
	class User extends \Eloquent {}
}

