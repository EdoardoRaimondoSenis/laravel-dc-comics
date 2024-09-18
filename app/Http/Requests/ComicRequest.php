<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:80',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|string|max:4',
            'series' => 'required|string|max:80',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:40',
        ];
    }

    public function messages() {
         return [
            'title.min' => 'deve contenere un minimo di :min caratteri',
            'title.max' => 'puo\' contenere un massimo di :max caratteri',
            'title.required' => 'il titolo e\' obbligatorio',
            'description.required' => 'la descrizione e\' obbligatoria',
            'thumb.required' => 'l\' immagine e\' obbligatoria',
            'price.required' => 'il prezzo e\' obbligatorio',
            'price.max' => 'puo\' contenere un massimo di :max caratteri',
            'series.required' => 'il nome di saga di provenienza e\' obbligatorio',
            'series.max' => 'puo\' contenere un massimo di :max caratteri',
            'sale_date.required' => 'la data di uscita e\' obbligatoria',
            'type.required' => 'il  tipo e\' obbligatorio',
            'type.max' => 'puo\' contenere un massimo di :max caratteri',
        ];
    }
}
