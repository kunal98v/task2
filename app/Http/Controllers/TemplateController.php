<?php

namespace App\Http\Controllers;

use App\Models\template;
use App\Models\template_fields;
use App\Models\Data_type;
use App\Models\validation;

class TemplateController extends Controller
{
    
    public function add_data(){
    
        $obj = new template_fields();
        $obj->name = "Kunal";
        $obj->email = "kunal98v@gmail.com";
        $obj->mobile = 6545645;
        $obj->save();

        $m = new template();
        $m->template_name = "Students";
        $m->save();

        $m->template_fields()->save($obj);
       


    }


}

