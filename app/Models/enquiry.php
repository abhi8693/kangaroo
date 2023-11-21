<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enquiry extends Model
{
    use HasFactory;
   
    protected $fillable = ['name','email','phone','category','niche','type','budget','created_at','updated_at'];
    public function leadmessage(){
        return $this->hasMany(enquiry::class,'id');
    }
}
