<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
            'subject' => 'required | string | max:50',
            'category' => 'required | integer',
            'desc' => 'required | string | max:400',
            'status' => 'boolean',
            'sort' => 'required | integer',
            'enable_at' => 'string',  //'date' ?
            // 'tags' => 'string',
            // 'pic' => 'string'
        ];
    }
}
