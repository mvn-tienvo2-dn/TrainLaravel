<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
class User extends Authenticatable
{
    use SoftDeletes;

    /**
     * 
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * 
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getGenderNameAttribute() {
        if($this->gender===1) return 'Male';
        if($this->gender===2) return 'Female';
        if($this->gender===null) return 'Undified';
    }
    public function getGradeAttribute() {  
        if($this->birthday!==NULL){
            $birthday=$this->birthday;
            $birthday= date('Y', strtotime($birthday));
            $currentDateTime=Carbon::now('Asia/Ho_Chi_Minh')->year;
            $age=$currentDateTime-$birthday;
            switch ($age) {
                case $age<6:
                return 'Nursery';
                break;
                case $age>=6&&$age<=11:
                return 'Primary';
                break;

                case $age>=12&&$age<=15:
                return 'Secondary';
                break;

                case $age>=16&&$age<=18:
                return 'High';
                break;
                case $age>18:
                return 'University';
                break;        
                default:
                return 'Undified';
                break;
            }     
        }else {return 'Undified';}

    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
