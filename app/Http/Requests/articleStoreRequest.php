<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articleStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;    //false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'subject' => 'required | max:50',
            // 'category' => 'required',
            'desc' => 'required | max:400',
            // 'status',
            // 'sort' => 'required',
            // 'enable_at',
            // 'tags' 
        ];
    }
}
