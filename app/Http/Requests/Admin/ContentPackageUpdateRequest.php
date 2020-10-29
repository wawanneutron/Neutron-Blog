<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContentPackageUpdateRequest extends FormRequest
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
        // validasi
        return [
            'title' => 'required|max:255',
            'title_content' => 'required|max:255',
            'writer' => 'required|max:255',
            'date_writer' => 'required|date',
            'category' => 'required|max:255',
            'content' => 'required',
            'about_writer' => 'required'
        ];
    }
}
