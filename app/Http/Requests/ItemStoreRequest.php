<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Http\Exceptions\HttpResponseException;

class ItemStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required | max:10',
            // 'price' => 'required | min:0',
            // 'desc' => 'max:200'
            'content' => 'required'
        ];
    }

/*     public function msg(){
        $msg = [
            'required' => 'title、price 欄位必填.'  //rules method 的 required field
        ];
    }
 */}
