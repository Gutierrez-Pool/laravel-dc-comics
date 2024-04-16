<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            "title" => "required|max:100",
            "description" => "nullable | max:5000",
            "thumb" => "nullable | max:255",
            "price"=> "nullable | max:7",
            "series"=> "required|max:100",
            "sale_date"=> "nullable",
            "type"=> "required|max:100",
            "artists"=> "nullable|max:1000",
            "writers"=> "nullable|max:1000",
        ];
    }

    public function messages(): array
    {
        return [
            "title.required"=> "Devi inserire il titolo",
            "title.max"=> "Il titolo deve avere meno di :max caratteri",
            "description.max"=> "La descrizione deve avere meno di :max caratteri",
            "thumb.max"=> "Il link dell'immagine deve avere meno di :max caratteri",
            "price.max"=> "Il prezzo deve avere meno di :max caratteri",
            "series.required"=> "Devi inserire la serie",
            "series.max"=> "Le serie deve avere meno di :max caratteri",
            "type.required"=> "Devi inserire il tipo",
            "type.max"=> "Il tipo deve avere meno di :max caratteri",
            "artists.max"=> "Artisti deve avere meno di :max caratteri",
            "writers.max"=> "Scrittori deve avere meno di :max caratteri",
        ];
    }
}
