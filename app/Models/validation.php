<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TemplateFieldsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class validation extends Model
{
    use HasFactory;
    public function template_fields(){

        return $this->hasOne(TemplateFieldsController::class);
    }
}
