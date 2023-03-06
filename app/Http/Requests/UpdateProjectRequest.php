<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => ['required', 'unique:projects', 'max:100'],
            'content' => ['nullable'],
            'slug' => ['required', 'max:100'],
            'image' => ['required' , 'max:400']
        ];
    }

    public function messages(){
        return[
            'title.required' => 'Inserisci un titolo!',
            'title.unique' => 'Un progetto con lo stesso titolo è già presente nella pagina!',
            'title.max' => 'Il titolo può avere massimo 100 caratteri!',
            'slug.required' => 'Inserisci uno slug per il progetto!',
            'slug.max' => 'Lo slug può avere massimo 100 caratteri!',
            'image.required' => 'Immagine obbligatoria!',
            'image.max' => 'Il link immagine può avere massimo 400 caratteri!',
            
        ];
    }
}
