<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|max:75',
            'categories_id' => 'required',
            'keywords' => 'required',
            'content'=>'required|min:150',
//            'email'=>'email',
//            'phone'=>'max:12'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Musisz uzupełnić tytuł strony',
            'content.required'=>'Musisz uzupełnić treść strony',
            'keywords.required'=>'Musisz uzupełnić tagi strony',
            'url.required'=>'Musisz uzupełnić adres URL strony',
            'title.max'=>'Tytuł może mieć maksymalnie 75 znaków',
            'content.min'=>'Opis strony musi mieć przynajmniej 150 znaków',
            'url.url'=>'Musisz podać poprawny format adresu strony',
//            'email.email'=>'Musisz podać poprawny format kontaktowego adresu email',
//            'phone.max'=>'Numer telefonu może mieć maksymalnie 12 znaków',

        ];
    }
}
