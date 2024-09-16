<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{ protected $fillable = ['Model_ID',
    'Tank_ID',
    'Owner_ID',
    'Transimision_ID',
    'Type_ID',
    'Motor_ID',
    'Color_ID',
    'Condition_ID',
    'price',
    'photo'];

    use HasFactory;

public function VehicleModel()
{
    return $this->hasOne(VehicleModel::class,'id','Model_ID')??'noModel';
}
public function VehicleTransmission()
{
    return $this->hasOne(Transimission::class,'id','Transimision_ID')??'noTransimission';
}
public function VehicleMotor()
{
    return $this->hasOne(Motor::class,'id','Motor_ID')??'noMotor';
}
public function VehicleTank()
{
    return $this->hasOne(Tank::class,'id','Tank_ID')??'no Tank';
}
public function VehicleType()
{
    return $this->hasOne(Type::class,'id','Type_ID')??'no Type';
}







}
