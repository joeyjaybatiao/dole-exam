<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Member extends Model {
    protected $fillable = [
        'household_id','name','birthdate','age','sex','civil_status'
    ];
    public function household() {
        return $this->belongsTo(Household::class);
    }
}
