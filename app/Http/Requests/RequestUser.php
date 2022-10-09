<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
        // 'email.required' => 'Email is required',  
        // 'email.unique' => 'Email address must be unique', 
        // 'username.required' => 'Username is required',
        // 'username.unique' => 'Username must be unique',
        //'cnic_file.required' => 'CNIC Copy is required',
        //'cv_file.required' => 'Current Resume is required',
        ];
    }

    public function rules()
    {
        return [
            // 'project_id' => 'required',
            // 'name' => 'required',
            // 'personal_email' => 'required',
            // 'phonenumber' => 'required|min:12',
            // 'emergency_number' => 'required|min:12',
            // 'residential_address' => 'required',
            // 'dob' => 'required',
            // 'gender' => 'required',
            // 'marital_status' => 'required',
            // 'email' => 'required|unique:users,email',//.$user->id
            // 'username' => 'required|unique:users,username',

            // 'avatar' => 'required|max:10000|mimes:png,jpeg,jpg',
            //'cnic_file' => 'required|max:10000|mimes:png,jpeg,jpg',
            //'cv_file' => 'required|max:10000|mimes:png,jpeg,jpg',

        ];
    }
}
