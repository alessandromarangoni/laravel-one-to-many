<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreportfolioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:5|max:250",
            "content" => "max:2500",
            "image" => "url|max:2500",
            "type_id" =>'max:2',
        ];
    }
    public function messages() {
        return [
            "title.required" => "Ogni progetto deve avere un titolo",
            "content.required" => "Ogni progetto deve avere un contenuto",
            "img.required" => "Ogni progetto deve avere un immagine"
        ];
    }
}
