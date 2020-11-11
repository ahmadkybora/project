<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{

    protected $fillable = ['user_id', 'isInsurance', 'isSkillCard', 'ImageBrithCertificate', 'ImageCardService', 'militaryServiceStatus', 'typeOfExemption', 'socialSecurityInsurance', 'insuranceCode', 'degreeOfSkillCard', 'imageSkillCard', 'countChild', 'imageNationalCard', 'fatherName', 'bcNumber', 'placeIssue', 'placeBirth', 'religion', 'relegion2', 'bloodType', 'historyWar', 'historyInjury', 'captivity', 'housingSitutation', 'physicalCondition', 'physicalConditionComment', 'dutyService', 'price', 'cardNumber', 'paymentNumber'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skill()
    {
        return $this->belongsTo(skill::class);
    }
}
