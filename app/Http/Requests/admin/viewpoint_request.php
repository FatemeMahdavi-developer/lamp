<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class viewpoint_request extends FormRequest
{
    public function authorize(): bool
    {
        if(Gate::any(["create_viewpoint","update_viewpoint"])){
            return true;
        }else{
            return false;
        }
    }

    public function rules(): array
    {
        $rules= [
            'title' => ['required', 'string', 'min:1', 'max:255'],
            'pic' => ['nullable', 'mimes:jpeg,png,jpg,gif,svg,webp','max:'.env('MAXIMUM_FILE')],
            'alt_pic' => ['nullable', 'string', 'min:1', 'max:255'],
            'position' => ['required', 'string', 'min:1', 'max:100'],
            'note'=>['required', 'string','min:3','max:255']
        ];
        if(is_string("pic") && in_array(pathinfo($this->pic,PATHINFO_EXTENSION),['jpeg','png','jpg','gif','svg','webp'])){
            unset($rules['pic']);
        }
        return $rules;
    }
}
