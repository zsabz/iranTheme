<?php

namespace Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class product extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'cat1' => 'required',
            'cat2' => 'required',
            'name' => 'required',
            'price'=>['required'],
            'title' => 'required',
            'status' =>'accepted',
            'mainFile'=>'required',
            // 'img'=>['required',File::image()],
            'attributes' => [
                'name' => 'نام به درستی وارد نشده ',
            ],
        ];
        
    }
}
