<?php

namespace Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|array',
            'specialization' => 'nullable|array',
            'hospital' => 'nullable|array',
            'designation' => 'nullable|array',
            'specialty' => 'nullable|array',
            'languages' => 'nullable|array',
            'experience' => 'nullable|array',
            'description' => 'nullable|array',
            'achievements' => 'nullable|array',
            'studies' => 'nullable|array',
            'work_experience' => 'nullable|array',
            'email' => 'required|max:255|unique:users,email,'.$this->route('user'),
            'mobile' => 'required|regex:/[0-9]{6,20}/|nullable',
            'user_name' => 'required|max:255|unique:users,user_name,'.$this->route('user'),
        ];
    }
}
