<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
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
            'name_album' => 'required',
            'singer_album' => 'required',
            'image' => 'required'
        ];
    }

    public function message ()
    {
        return [
            'name_album.required' => 'ten khong hop le.',
            'singer_album.required' => 'ten khong hop le',
            'image.required' => 'image khong hop le'
        ];

        
    }
}
