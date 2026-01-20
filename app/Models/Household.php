<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Household extends Model {
    protected $fillable = [
        'father_name','mother_name','father_occupation','mother_occupation',
        'home_address','family_income','house_status'
    ];
    public function members() {
        return $this->hasMany(Member::class);
    }
}
