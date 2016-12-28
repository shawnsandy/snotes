<?php

namespace ShawnSandy\Summernote\App\Notes;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotesRequest extends FormRequest
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
            'snotes_title' => 'required|min:10',
            'snotes_description' => 'present'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'snotes_title.required' => 'The title is required and must be 10 + characters',
        ];
    }
}
