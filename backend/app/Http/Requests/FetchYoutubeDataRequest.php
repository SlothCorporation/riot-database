<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FetchYoutubeDataRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'url' => 'required|url',
        ];
    }
}
