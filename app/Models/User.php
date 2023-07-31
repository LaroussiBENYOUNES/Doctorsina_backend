<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
      use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','email', 'password','national_id','address','picture','birth_date','gender','phone','mobile','emergency','type','medical_degree','specialist','biography','educational_qualification','blood_group','doctor_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Scopes
    public function scopeEmployee($query)
    {
        return $query->whereType('admin')->whereType('doctor')->whereType('patient');
    }

    public function scopeAdmin($query)
    {
        return $query->whereType('admin');
    }

    public function scopeDoctor($query)
    {
        return $query->whereType('doctor');
    }

    public function scopePatient($query)
    {
        return $query->whereType('patient');
    }

    public function scopeNurse($query)
    {
        return $query->whereType('nurse');
    }

    public function scopeAccountant($query)
    {
        return $query->whereType('accountant');
    }

    public function scopePharmacist($query)
    {
        return $query->whereType('pharmacist');
    }

    public function scopeLaboratorist($query)
    {
        return $query->whereType('laboratorist');
    }

    public function scopeReceptionist($query)
    {
        return $query->whereType('receptionist');
    }

    public function scopeSecretray($query){
        
        return $query->whereType('secretary');
    }

    // Relation Ships
    // Global Relations
    public function departments(){
        return $this->belongsToMany(Department::class);
    }

    public function timeSchedules(){
        return $this->hasMany(TimeSchedule::class);
    }

    public function dayoffSchedules(){
        return $this->hasMany(DayoffSchedule::class);
    }
    // Doctor & Patient Relations
    public function prescriptions(){
        return $this->hasMany(Prescription::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
    // Patient Relations
    public function casesHistories(){
        return $this->hasMany(CaseHistory::class);
    }

    public function documents(){
        return $this->hasMany(Document::class);
    }

    public function bedAllotments(){
        return $this->hasMany(BedAllotment::class);
    }

    public function weights(){
        return $this->hasMany(Weight::class,'patient_id');
    }

    public function glucoses(){
        return $this->hasMany(Glucose::class,'patient_id');
    }
    public function bloodPressures(){
        return $this->hasMany(BloodPressure::class,'patient_id');
    }
    public function temperatures(){
        return $this->hasMany(Temperature::class,'patient_id');
    }
    public function hemoglobins(){
        return $this->hasMany(Hemoglobin::class,'patient_id');
    }
    public function heartRates(){
        return $this->hasMany(HeartRate::class,'patient_id');
    }
    public function hasDepartment($departmentId){
        return in_array($departmentId,$this->departments->pluck('id')->toArray());
    }
}
