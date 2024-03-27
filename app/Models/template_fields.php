<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\DataTypeController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ValidationController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class template_fields extends Model
{
    use HasFactory;
    public function template(){
        return $this->belongsTo(TemplateController::class);
     }
 
     public function data_type(){
         return $this->belongsTo(DataTypeController::class);
     }
     
     public function validation(){
         return $this->belongsTo(ValidationController::class);
 
     }
}
